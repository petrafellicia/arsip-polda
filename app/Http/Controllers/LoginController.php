<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\User\AuthenticatesUsers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function index(){
        return view('login.index', [
            'title' => 'Login'
        ]);
    }
}
