<?php

namespace App\Http\Controllers;

use App\Models\Models;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function Nouvelle(){
        $Categorie = Categorie::all();
        return view('Model/Ajouter-Model',["Categorie" => $Categorie]);
    }

    public function Gestion(){
        $Model = Models::all();
        return view('Model/Gestion-Model',["Model" => $Model]);
    }

    public function Store(Request $request){
        $request->validate([
            "Nom" => ['required', 'max:50'],
            "Description" => ['required'],
            "Prix" => ['required'],
        ]);
        $Model = new Models();
        $Model->Nom = $request->get('Nom');
        $Model->Description = $request->get('Description');
        $Model->Prix = $request->get('Prix');
        $Model->IdCategorie = $request->get('Categorie');
        $File = $request->file('Image');
        $FileName = $File->getClientOriginalName();
        $Destinaton = 'Models';
        $File->move($Destinaton, $FileName);
        $Model->Image = $FileName;
        $Model->save();
        return redirect("/Gestion-Model");
    }
}
