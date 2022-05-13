<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
    return view('layouts.main');
});
Route::get("/login", function(){
    return view('authorization.login');
})->name('login');
Route::post("/login", [AuthController::class, 'Authorization'])->name('Authorization');
Route::post("/logout", [AuthController::class, 'logout'])->name('logout');

Route::get("/registration", function(){
    return view('registration.re');
})->name('registration');
Route::post("/registration", [RegistrationController::class, 'registration'])->name('AddUser');
