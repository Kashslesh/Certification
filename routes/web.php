<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessagerieController;
use Illuminate\Http\Request;
use App\Http\Requests\CreationRequest;
use App\Http\Requests\ConnexioneRequset;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/messages.json',[MessagerieController::class, 'messageListjson']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
// Valider le formulaire de signup et se connecter
Route::post('/signup', [AuthController::class, 'signInUp']);

Route::post('/signout', [AuthController::class, 'signout']);


// Valider le formulaire de login et se connecter
Route::post('/login', [AuthController::class, 'loginIn']);


Route::post('/', [MessagerieController::class, 'envoyerMessage']);
