<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/navbar', function () {
    return view('components/navbar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/detailCourse', function () {
    return view('detailCourse');
});

Route::get('/register', function () {
    return view('register');
});
