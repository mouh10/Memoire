<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            //return redirect('Acceuil')->with(['success'=>'Connexion Reussie !']);
            return redirect('Acceuil');
        }
        else{

            return back()->withErrors(['email'=>'Email Ou Mot de Passe Invalide !']);
        }
    }

    public function destroy()
    {
        Auth::logout();
        //return redirect('/Bienvenue')->with(['success'=>'Vous etes Deconnecter !']);
        return redirect('/Bienvenue');
    }
}
