<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    	]);


        // TODO: password should be encrypted

    	$user = User::create(request(['name', 'email', bcrypt('password')]));

    	auth()->login($user);

    	return redirect()->home();


    }
}
