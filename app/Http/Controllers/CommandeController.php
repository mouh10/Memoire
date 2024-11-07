<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Client;
use App\Models\Mesure;
use App\Models\Models;
use App\Models\Commande;
use App\Models\Employee;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function Nouvelle(){
        $Client = Client::all();
        $Model = Models::all();
        return view('Commande/Ajouter-Commande', ['Model' => $Model, 'Client' => $Client]);
    }

    public function Liste(){
        $Client = Client::Where('IdUser',auth()->user()->id)->first();
        $Commande = Commande::Where('IdClient',$Client->id)->get();
        return view('Commande/Liste-Commande', ["Commande" => $Commande]);
    }

    public function Taches(){
        $Employer = Employee::where('IdUser',auth()->user()->id)->first();
        $Commande = Commande::Where('IdEmployer',$Employer->id)->get();
        return view('Commande/Liste-Taches', ["Commande" => $Commande]);
    }

    public function Gestion(Request $request){
        if($request->Valeur == ""){
            $Commande = Commande::all();
            return view('Commande/Gestion-Commande', ["Commande" => $Commande]);
        }else if($request->Valeur == "Attente"){
            $Commande = Commande::where("Etat","ATTENTE")->get();
            return view('Commande/Gestion-Commande', ["Commande" => $Commande]);
        }else if($request->Valeur == "Production"){
            $Commande = Commande::where("Etat","PRODUCTION")->get();
            return view('Commande/Gestion-Commande', ["Commande" => $Commande]);
        }
        else if($request->Valeur == "Terminer"){
            $Commande = Commande::where("Etat","TERMINER")->get();
            return view('Commande/Gestion-Commande', ["Commande" => $Commande]);
        }
    }

    public function Attribuer(Request $request){
        $Id = $request->get('Id');
        $Commande = Commande::where('id',$Id)->first();
        $Employer = Employee::where('Statut',"LIBRE")->get();
        return view('Commande/Attribuer-Commande', ["Employer" => $Employer, "Commande" => $Commande]);
    }

    public function Attribute(Request $request){
        $Id = $request->get('Id');
        $Commande = Commande::where('id',$Id)->first();
        $Commande->IdEmployer = $request->Tailleur;
        $Commande->save();
        $Employer = Employee::where('id',$request->Tailleur)->first();
        $Employer->Statut = "ATTRIBUER";
        $Employer->save();
        return redirect('/Gestion-Commande');
    }

    public function Accept(Request $request){
        $Id = $request->get('Id');
        $Commande = Commande::where('id',$Id)->first();
        $Commande->Etat = "PRODUCTION";
        $Commande->save();
        return redirect('/Mes-Taches');
    }

    Public function Store(Request $request){
        $request->validate([
            "Tissue" => ['required'],
        ]);
        if($request->Nouveau == true){
            $request->validate([
                "Nom" => ['required', 'max:50'],
                "Quantite" => ['required', 'max:2'],
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

            $Model = Models::where('id',$request->Model)->first();
            $Commande = new Commande;
            $Date = Carbon::now()->format('d/m/Y');
            $Livraison = Carbon::now()->addDays(15)->format('d/m/Y');
            $Commande->Numero = "C0001";
            $Commande->Tissue = $request->Tissue;
            $Commande->Etat = "ATTENTE";
            $Commande->DateCommande = $Date;
            $Commande->DateLivraison = $Livraison;
            $Commande->Quantite = $request->Quantite;
            $Commande->Montant = ($Model->Prix * $request->Quantite);
            $Commande->IdModel = $request->Model;
            $Commande->IdClient = $C->id;
            $Commande->save();

            return redirect('/Gestion-Commande');
        }elseif($request->Existent == true){
            $C = Client::Where('id', $request->Client)->first();
            $Model = Models::where('id',$request->Model)->first();
            $Commande = new Commande;
            $Date = Carbon::now()->format('d/m/Y');
            $Livraison = Carbon::now()->addDays(15)->format('d/m/Y');
            $Commande->Numero = "C0001";
            $Commande->Tissue = $request->Tissue;
            $Commande->Etat = "ATTENTE";
            $Commande->DateCommande = $Date;
            $Commande->DateLivraison = $Livraison;
            $Commande->Quantite = $request->Quantite;
            $Commande->Montant = ($Model->Prix * $request->Quantite);
            $Commande->IdModel = $request->Model;
            $Commande->IdClient = $C->id;
            $Commande->save();

            return redirect('/Gestion-Commande');
        }else{
            $Client = Client::Where('IdUser',auth()->user()->id)->first();
            $Model = Models::where('id',$request->Model)->first();
            $Commande = new Commande;
            $Date = Carbon::now()->format('d/m/Y');
            $Livraison = Carbon::now()->addDays(15)->format('d/m/Y');
            $Commande->Numero = "C0001";
            $Commande->Tissue = $request->Tissue;
            $Commande->Etat = "ATTENTE";
            $Commande->DateCommande = $Date;
            $Commande->DateLivraison = $Livraison;
            $Commande->Quantite = $request->Quantite;
            $Commande->Montant = ($Model->Prix * $request->Quantite);
            $Commande->IdModel = $request->Model;
            $Commande->IdClient = $Client->id;
            $Commande->save();
            return redirect('/Liste-Commande');
        }
    }
}
