<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    // Method to show the registration form
    public function showRegistrationForm()
    {
        // Returns the 'register' view, assuming 'register.blade.php' exists in resources/views
        return view('register'); 
    }
}
