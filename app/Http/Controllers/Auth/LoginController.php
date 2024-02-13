<?php

namespace App\Http\Controllers\Auth;


use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        return Auth::attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }

    protected function loggedOut(Request $request)
    {
        // Custom logic to perform after the user is logged out
        // For example, redirect to a specific page or display a message
        return redirect('/')->with('status', 'You have been logged out!');
    }
}

