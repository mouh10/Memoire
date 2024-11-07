<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Acceuil()
    {
        return redirect('Acceuil');
    }

    public function Profile(){
        $Information = User::where('email', auth()->user()->email)->first();
        return view("profile", ["Information" => $Information]);
    }
}
