<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Mesure;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Nouvelle(){
        return view('Client/Ajouter-Client');
    }

    public function Gestion(){
        $Client = Client::all();
        return view('Client/Gestion-Client', ["Client" => $Client]);
    }

    public function Store(Request $request){
        $request->validate([
            "Nom" => ['required', 'max:50'],
            "Numero" => ['required'],
            "Adresse" => ['required'],
            "Mail" => ['required'],
            "Password" => ['required'],
            "Cou" => ['required'],
            "Epaule" => ['required'],
            "Poitrine" => ['required'],
            "Bras" => ['required'],
            "Poignet" => ['required'],
            "Cuisse" => ['required'],
            "Hanches" => ['required'],
            "Pantalon" => ['required'],
        ]);
        $Utilisateur = new User;
        $Utilisateur->name = $request->Nom;
        $Utilisateur->email = $request->Mail;
        $Utilisateur->idrole = 4;
        $request->Password = bcrypt($request->Password);
        $Utilisateur->password = $request->Password;
        $Utilisateur->telephone = $request->Numero;
        $Utilisateur->adresse = $request->Adresse;
        $Utilisateur->save();
        $U = User::Where('email',$request->Mail)->first();
        $Client = new Client;
        $Client->IdUser = $U->id;
        $Client->save();
        $C = Client::Where('IdUser', $U->id)->first();
        $Mesure = new Mesure;
        $Mesure->Cou = $request->Cou;
        $Mesure->Epaule = $request->Epaule;
        $Mesure->Poitrine = $request->Poitrine;
        $Mesure->Bras = $request->Bras;
        $Mesure->Poignet = $request->Poignet;
        $Mesure->Cuisse = $request->Cuisse;
        $Mesure->Hanches = $request->Hanches;
        $Mesure->Pantalon = $request->Pantalon;
        $Mesure->IdClient = $C->id;
        $Mesure->save();
        return redirect('/Gestion-Client');
    }

    public function StoreNew(Request $request){
        $request->validate([
            "Nom" => ['required', 'max:50'],
            "Numero" => ['required'],
            "Adresse" => ['required'],
            "Mail" => ['required'],
            "Password" => ['required'],
            "Cou" => ['required'],
            "Epaule" => ['required'],
            "Poitrine" => ['required'],
            "Bras" => ['required'],
            "Poignet" => ['required'],
            "Cuisse" => ['required'],
            "Hanches" => ['required'],
            "Pantalon" => ['required'],
        ]);
        $Utilisateur = new User;
        $Utilisateur->name = $request->Nom;
        $Utilisateur->email = $request->Mail;
        $Utilisateur->idrole = 4;
        $request->Password = bcrypt($request->Password);
        $Utilisateur->password = $request->Password;
        $Utilisateur->telephone = $request->Numero;
        $Utilisateur->adresse = $request->Adresse;
        $Utilisateur->save();
        $U = User::Where('email',$request->Mail)->first();
        $Client = new Client;
        $Client->IdUser = $U->id;
        $Client->save();
        $C = Client::Where('IdUser', $U->id)->first();
        $Mesure = new Mesure;
        $Mesure->Cou = $request->Cou;
        $Mesure->Epaule = $request->Epaule;
        $Mesure->Poitrine = $request->Poitrine;
        $Mesure->Bras = $request->Bras;
        $Mesure->Poignet = $request->Poignet;
        $Mesure->Cuisse = $request->Cuisse;
        $Mesure->Hanches = $request->Hanches;
        $Mesure->Pantalon = $request->Pantalon;
        $Mesure->IdClient = $C->id;
        $Mesure->save();
        return redirect('/Connexion');
    }
}
