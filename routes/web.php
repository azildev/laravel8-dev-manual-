<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['guest','user_is_not_logged_in'])->get('/', function () {
    return view('panel.login', ['title' => 'Login :: AZIL_DEVELOP']);
})->name('login');


Route::match(['get', 'post'], 'login', function(){
    return redirect('/');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/pages/show', [PagesController::class, 'index']);

Route::middleware(['auth:sanctum', 'user_already_logged_in'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

