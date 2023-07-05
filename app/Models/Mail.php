<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Mail {
    // use HasFactory;
    private static $surat_mails =[
        [
                "title" => "Daftar Surat Masuk",
                "slug" => "daftar-surat-masuk",
                "author" => "POLDA",
                "body" => "lorem"
        ],
        [
                "title" => "Daftar Surat Keluar",
                "slug" => "daftar-surat-keluar",
                "author" => "POLDA",
                "body" => "lorem2"
        ]
    ];

    public static function all(){
        return collect(self::$surat_mails);
    }
    
    public static function find($slug){
        $mails = static::all();
        // $mail=[];
        // foreach($mails as $m){
        //     if($m["slug"] === $slug){
        //         $mail = $m;
        //     }
        // }
        return $mails->firstWhere('slug', $slug);
    }

}