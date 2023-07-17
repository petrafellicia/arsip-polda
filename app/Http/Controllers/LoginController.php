<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\User\AuthenticatesUsers;
// use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    // use AuthenticatesUsers;

    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    public function index(){
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function postLogin(Request $request){
       //validasi
       Session::flash('email', $request->email);
       $request->validate([
        'email'=>'required',
        'password'=>'required'
       ],[
        'email.required'=>'email wajib diisi',
        'password.required'=>'Password wajib diisi',
       ]);

       //autentikasi
       $infologin = [
        'email' => $request->email,
        'password' => $request->password
       ];

       if(Auth::attempt($infologin)){
        //sukses
        return redirect('home')->with('Berhasil login');
       }else{
        //gagal
        return redirect('login')->withErrors('Username atau password tidak vaid');
       }
    }
}
