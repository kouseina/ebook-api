<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me() {
        return [
            "nis"=>"31031008038",
            "name"=>"Daffa Putera Kouseina",
            "gender"=>"Laki-laki",
            "phone"=>"081325218571",
            "class"=>"XII RPL 2",
        ]
    }
}
