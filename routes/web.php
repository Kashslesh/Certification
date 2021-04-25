<?php

use App\Http\Requests\ConnexioneRequset;
use App\Http\Requests\CreationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessagerieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//affichage de la page welcome
Route::get('/', function () {
    return view('welcome');
});

//affichage de la page login
Route::get('/login', function () {
    return view('login');
});
//affichage de la page signup
Route::get('/signup', function () {
    return view('signup');
});
// Valider le formulaire de signup et se connecter
Route::post('/signup', [AuthController::class, 'signInUp']);
// Valider le formulaire de signup et se déconnecter
Route::post('/signout', [AuthController::class, 'signout']);

// Valider le formulaire de login et se connecter
Route::post('/login', [AuthController::class, 'loginIn']);
//fonction d'envoi de messages
Route::post('/', [MessagerieController::class, 'envoyerMessage']);
// recuperation des message en format de json
Route::get('/messages.json',[MessagerieController::class, 'messageListjson']);


