<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ChangePasswordController;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'Acceuil']);

	Route::get('Acceuil', [AcceuilController::class, 'Acceuil'])->name('Acceuil');

    //UTILISATEUR
    Route::get('Gestion-Utilisateur', function () {
		return view('laravel-examples/user-management');
	})->name('Gestion-Utilisateur');

    //COMMANDES
    Route::get('/Nouvelle-Commande', [CommandeController::class, 'Nouvelle']);
    Route::POST('/Aded-Commande', [CommandeController::class, 'Store']);
    Route::get('/Liste-Commande', [CommandeController::class, 'Liste']);
    Route::get('/Mes-Taches', [CommandeController::class, 'Taches']);
    Route::POST('/Accepter', [CommandeController::class, 'Accept']);
    Route::get('/Gestion-Commande', [CommandeController::class, 'Gestion']);
    Route::get('/Attribuer-Commande', [CommandeController::class, 'Attribuer']);
    Route::POST('/Attribute-Commande', [CommandeController::class, 'Attribute']);

    //CATEGORIE
    Route::get('/Nouvelle-Categorie', [CategorieController::class, 'Nouvelle']);
    Route::POST('/Aded-Categorie', [CategorieController::class, 'Store']);
    Route::get('/Gestion-Categorie', [CategorieController::class, 'Gestion']);

    //MODEL
    Route::get('/Nouveau-Model', [ModelController::class, 'Nouvelle']);
    Route::POST('/Aded-Model', [ModelController::class, 'Store']);
    Route::get('/Gestion-Model', [ModelController::class, 'Gestion']);

    //EMPLOYER
    Route::get('/Nouveau-Employer', [EmployerController::class, 'Nouvelle']);
    Route::POST('/Aded-Employer', [EmployerController::class, 'Store']);
    Route::get('/Gestion-Employer', [EmployerController::class, 'Gestion']);

    //CLIENT
    Route::get('/Nouveau-Client', [ClientController::class, 'Nouvelle']);
    Route::POST('/Aded-Client', [ClientController::class, 'Store']);
    Route::get('/Gestion-Client', [ClientController::class, 'Gestion']);

    //AUTRES
	Route::get('Profile', [HomeController::class, 'Profile'])->name('profile');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

//VISITEUR
Route::get('/Bienvenue', [AcceuilController::class, 'Visiteur'])->name('login');

Route::get('/Connexion', function () {
    return view('session/login-session');
})->name('Connexion');

Route::get('/Creer-Compte', function () {
    return view('session/register');
})->name('Creation');

Route::POST('/Aded-NewClient', [ClientController::class, 'StoreNew']);
