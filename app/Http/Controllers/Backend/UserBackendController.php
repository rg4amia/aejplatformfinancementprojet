<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserBackendController extends Controller
{
    public function index(){
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
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
                return redirect()->route('backend.dashboard');
            } else {
                session()->flash('warning', 'Votre adresse électronique ou votre mot de passe est incorrecte');
                return back();
            }
        }
    }
}
