<?php
//foi implemenado nesta rota a pasta AdminAnimal, pois o controllerAnimal está dentro da pasta AdminAnimal que está dentro da pasta controller
namespace App\Http\Controllers\AdminAnimal;
//importando a classe controller
use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class ControllerAnimal extends Controller
{
    public function index(){
        return view('animal');
    }
    public function cachorro(){

    }
    public function gato(){

    }
}
