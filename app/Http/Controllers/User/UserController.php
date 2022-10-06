<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function indexRegister(){
        return view('auth.register');
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
            'email.password' => 'Le champ mot de passe est obligatoire',
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
                $loginbackend = User::whereEmail($request->email)->first();
                return redirect()->intended('/admin/dashboard');
            } else {
                session()->flash('warning', 'Votre adresse électronique ou votre mot de passe est incorrecte');
                return back();
            }
        }
    }
}
