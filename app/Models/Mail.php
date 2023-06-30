<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Mail {
    // use HasFactory;
    private static $surat_mails =[
    [
        "title" => "Daftar Surat",
        "slug" => "daftar-surat",
        "author" => "POLDA",
        "body" => " "
    ]
    ];

    public static function all(){
        return self::$surat_mails;
    }
    
    public static function find($slug){
        $mails = self::$surat_mails;
        $mail=[];
        foreach($mails as $m){
            if($m["slug"] === $slug){
                $mail = $m;
            }
        }
    }

}