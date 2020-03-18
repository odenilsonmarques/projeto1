<?php
//foi implemenado nesta rota a pasta AdminAnimal, pois o controllerAnimal está dentro da pasta AdminAnimal que está dentro da pasta controller
namespace App\Http\Controllers\adminAnimal;
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

    //os dados enviado pela formmulario presente na view animal, serão redirecionado para o parametro $request
    //logo apos todos estes sao capturado pela funcão all(), essa funcão pegas os dados via post e get ...
    $data = $request->all();
    print_r($data);

    //pegando somente o nome enviado pelo formulario
    //echo "Meu nome é :".$data['nome']."<br><br>"; 

    //pegando dados com input (esta forma pega os dados da url quando não há dados no campo input nome)
    $data = $request->input('nome');
    print_r($data); 

    //pegando dados exclusivamente da url
    $data = $request->query('nome');
    print_r($data); 
    
    //verificando se algun dado foi enviado e preenchido
    if($request->filled('cpf')){
        echo "existe um cpf";
    }else{
        echo "não existe cpf";
    }

        return view('adminAnimal.animal');
    }

    //passando dados do controller para a view, estou utilizando essa funcção ou metodo, mas poderia ser outro
    public function cachorro(){
        
        //para passar os dados para view, foi declarado as variaveie e depois foi criado um array para ser passado os dados
        $nome = "fred";
        $idade = 3;

        $data = [
            'nome' => $nome,
            'idade' => $idade
        ];

        return view('adminAnimal.cachorro',$data);
    }
    public function gato(){
        echo "Bem - vindo a pagina de gato";
    }
}
