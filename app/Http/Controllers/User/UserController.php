<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
            $user->genre        = $request->sexe;
            $user->prenom       = $request->prenom;
            $user->nom          = $request->nom;
            $user->name         = $request->nom . ' '.$request->prenom;
            $user->telephone    = $request->telephone;
            $user->email        = $request->email;
            $user->matricule_aej = $request->matricule_aej;
            $user->password     = Hash::make($request->password);
            // role id, 3 <=> Demandeur, 1 <=> Admin, 2 <=> Mentorat
            $role_r = Role::where('id', '=', 3)->firstOrFail();
            $user->assignRole($role_r);

            if ($user->save()) {
                session()->flash('success', 'Compte crée avec success');
                return redirect()->route('user.successful');
            }  //code...
        } catch (\Exception $e) {
            session()->flash('warning', $e->getMessage());
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
