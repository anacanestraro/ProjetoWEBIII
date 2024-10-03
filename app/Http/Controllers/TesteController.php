<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{

    public function homePage(){

        return view ('homePage');
    }

    public function caes(){
        return view ('caes');
    }

    public function gatos(){
        return view ('gatos');
    }

    public function teste(){
        $nome = 'Josué';
        return view ('teste', compact('nome'));
    }
}
