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
Route::get('/courses', function () {
    return view('courses');
});

Route::get('/detailCourse', function () {
    return view('detailCourse');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/coursesLock', function () {
    return view('coursesLock');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/invoice', function (){
    return view('invoice');
});

Route::get('/jadwalbelajar', function (){
    return view('jadwalbelajar');
});

Route::get('/jadwalkosong', function (){
    return view('jadwalkosong');
});