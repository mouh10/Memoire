<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function Nouvelle(){
        return view('Categorie/Ajouter-Categorie');
    }

    public function Gestion(){
        $Liste = Categorie::all();
        return view('Categorie/Gestion-Categorie',["Liste" => $Liste]);
    }

    public function Store(Request $request){
        $request->validate([
            'Nom' => ['required', 'max:50']
        ]);
        $Categorie = new Categorie();
        $Categorie->Nom = $request->get('Nom');
        $Categorie->save();
        return redirect('/Gestion-Categorie');
    }
}
