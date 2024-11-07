<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function Acceuil(){
        $Model = Models::all();
        return view('dashboard', ["Model" => $Model]);
    }

    public function Visiteur(){
        $Model = Models::all();
        return view('Visiteur', ["Model" => $Model]);
    }
}
