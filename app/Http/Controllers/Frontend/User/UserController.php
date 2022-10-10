<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Promoteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function indexRegister(){
        return view('auth.register');
    }

    public function storeDemandeur(Request $request){

        $this->validate(request(), [
            'nom'               => 'sometimes|required',
            'prenom'            => 'sometimes|required',
            'telephone'         => 'sometimes|required',
            'email'             => 'sometimes|required|email|unique:users',
            'password'          => 'sometimes',
            'password_confirm'  => 'sometimes|same:password'
        ]);

        try {
            $user               = new User();
            $user->name         = $request->nom . ' '.$request->prenom;
            $user->email        = $request->email;
            $user->password     = Hash::make($request->password);
            // role id, 3 <=> Demandeur, 1 <=> Admin, 2 <=> Mentorat
            $role_r = Role::where('id', '=', 3)->firstOrFail();
            $user->assignRole($role_r);

            if ($user->save()) {

                $matricule = \request('matricule_aej');
                $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9";
                $url =  "https://www.agenceemploijeunes.ci/site/demandeur_data/{$matricule}/{$token}";
                $response = Http::get($url);
                $data = json_decode($response->body());

                 $promteur = Promoteur::create([
                    'user_id'           => $user->id,
                    'nom'               => $data[0]->nom,
                    'prenoms'           => $data[0]->prenoms,
                    'date_naissance'    => $data[0]->datenaissance,
                    'matricule_aej'     => $data[0]->matriculeaej,
                    'telephone'         => $data[0]->telephone,
                    'sexe_id'           => $data[0]->sexe_id,
                    'situationmatrimoniale_id'  => $data[0]->situationmatrimoniale_id,
                    'niveauetude_id'            => $data[0]->niveauetude_id ? $data[0]->niveauetude_id : 0,
                    'commune_id'                => $data[0]->lieuhabitation_id ?  $data[0]->lieuhabitation_id  : 0,
                    'region_id'                 => $data[0]->divisionregionaleaej_id ?  $data[0]->divisionregionaleaej_id  : 0,
                    'dernier_diplome'           => $data[0]->diplome ?  $data[0]->diplome->libelle  : 0,
                    'lieunaissance_id'          => $data[0]->lieunaissance_id,
                    'nationnalite_id'           => $data[0]->paysnationalite ? $data[0]->paysnationalite->id : 0,
                    'nombreenfant'              => 0,
                    'nombrepers_charge'         => 0,
                    'adressepostale'            => null,
                    'adressegeoprecise'         => null,
                    'telfixe'                   => null,
                    'email'                     => $request->email,
                    'cellulaire'                => $data[0]->telephone
                ]);

                if($promteur){
                    session()->flash('success', 'Compte crée avec success');
                    return redirect()->route('user.successful');
                }
            }

        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
            dd($e->getMessage());
            return back();
        }
    }

    public function successful(){
        if(session()->get('success')){
            return view('auth.successfull');
        } else {
            return redirect()->route('user.enregistrer');
        }
    }

    public function apiGetMatricule(){
        $matricule = \request('matricule_aej');
        $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9";
        $url =  "https://www.agenceemploijeunes.ci/site/demandeur_info/{$matricule}/{$token}";
        $response = Http::get($url);
        $data = json_decode($response->body());
        return response()->json($data);
    }

    public function login(Request $request){

        $data = $request->all();

        $messages = [
            'email.required' => 'Le champ email est obligatoire',
            'password.required' => 'Le champ mot de passe est obligatoire',
        ];

        $data_src = [
            'email' => 'required|string',
            'password' => 'required|string',
        ];

        $validator = Validator::make($data, $data_src, $messages)->validate();

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            session()->flash('warning', 'Aucun compte ne correspond à cet utilisateur. Veuillez contacter l\'administrateur');
            return back();
        } else {
            $credentials = $request->only(['email', 'password']);

            if (Auth::guard()->attempt($credentials)) {
                $login = User::whereEmail($request->email)->first();
                return redirect()->intended('/');
            } else {
                session()->flash('warning', 'Votre adresse électronique ou votre mot de passe est incorrecte');
                return back();
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->intended('/');
    }
}
