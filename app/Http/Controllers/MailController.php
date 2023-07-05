<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class MailController extends Controller
{
    //
    public function index(){
        return view('mails', [
            "title" => "Mails",
            "mails" => Mail::all()
        ]);
    }

    public function show($slug){
        return view('mail', [
            "title" => "Surat",
            "mail" => Mail::find($slug)
        ]);
    }
}
