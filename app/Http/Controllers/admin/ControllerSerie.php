<?php

//foi implemenado nesta rota a pasta Admin, pois o controllerSerie está dentro da pasta Admin que está dentro da pasta controller
namespace App\Http\Controllers\Admin;

//importando a classe controller
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ControllerSerie extends Controller
{
    public function index(){
        return view('serieA');
    }

    public function serieB(){
        return view('serieB');
    }

    public function serieC(){
        echo "bem - vindo a C";
    }
}
