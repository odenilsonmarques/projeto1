<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompeticaoController extends Controller
{
    public function index(){
        return view ('competicao');
    }

    public function competicaosecundaria(){
        return view ('competicaosecundaria');
    }

    public function competicaoterciaria(){
        return view ('competicaoterciaria');
    }
}
