<?php
//foi implemenado nesta rota a pasta AdminAnimal, pois o controllerAnimal está dentro da pasta AdminAnimal que está dentro da pasta controller
namespace App\Http\Controllers\AdminAnimal;
//importando a classe controller
use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class ControllerAnimal extends Controller
{
    /*
        1º Entendo o funcionamento da classe Request.
        2º quando de tratar de requisição a classe request atribui valores passados ao paramentro declarado, este vai receber da classe
        request todas as informações necessárias.
        3º abaixo é mostrado a utiilização da classe Request e do seu parametro

    */
    public function index(Request $request){
         //pegando a url passada usando o parametro $request
        //$url = $request->url();
       // echo "A URL ACESSADA FOI: ".$url."<br><br>";

      //pegando o methodoa acessado usando o parametro $request
     //$method = $request->method();
    //echo "O METHODO DE REQUISIÇÃO UTIIZADO FOI: ".$method;

        return view('animal');
    }
    public function cachorro(){
        return view('cachorro');
    }
    public function gato(){
        echo "Bem - vindo a pagina de gato";
    }
}
