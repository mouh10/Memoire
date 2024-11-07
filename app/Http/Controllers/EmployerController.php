<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function Nouvelle(){
        return view('Employer/Ajouter-Employer');
    }

    public function Gestion(){
        $Employer = Employee::all();
        return view('Employer/Gestion-Employer', ["Employer" => $Employer]);
    }

    public function Store(Request $request){
        $request->validate([
            "Nom" => ['required'],
            "Mail" => ['required'],
            "Numero" => ['required'],
            "Adresse" => ['required'],
            "Password" => ['required'],
            "Specialite" => ['required'],
        ]);
        $Utilisateur = new User;
        $Utilisateur->name = $request->Nom;
        $Utilisateur->email = $request->Mail;
        $Utilisateur->idrole = 3;
        $request->Password = bcrypt($request->Password);
        $Utilisateur->password = $request->Password;
        $Utilisateur->telephone = $request->Numero;
        $Utilisateur->adresse = $request->Adresse;
        $Utilisateur->save();
        $U = User::Where('email',$request->Mail)->first();
        $Employer = new Employee;
        $Employer->IdUser = $U->id;
        $Employer->Statut = "LIBRE";
        $Employer->Specialite = $request->Specialite;
        $Employer->save();
        return redirect('/Gestion-Employer');
    }
}
