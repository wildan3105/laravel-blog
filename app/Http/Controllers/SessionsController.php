<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store(Request $request)
    {
    	$email = $request->email;
    	$password = bcrypt($request->password);

    	if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            echo 'authenticated';
        }

    	return back();

    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->home();
    }
}
