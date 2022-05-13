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
Route::get("/login", [AuthController::class, 'index'])->name('login');
Route::post("/login", [AuthController::class, 'Authorization'])->name('Authorization');

Route::get("/logout", [AuthController::class, 'logout'])->name('logout');

Route::get("/registration", [RegistrationController::class, 'index'])->name('registration');
Route::post("/registration", [RegistrationController::class, 'registration'])->name('AddUser');
