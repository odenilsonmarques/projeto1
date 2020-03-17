<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Esta rota ja vem por padrão no laravel, e quer dizer que qd o usuario acessar a raiz '/' do laravel este será redirecionado para view welcome 
que está dentro pasta resource->pasta view.
Nota: este tipo rota é indicado qd se quer apenas carregar uma pagina simples(ex: tela de login..)
*/
Route::get('/', function () {
    return view('welcome');
});


/*
Esta rota '/teste' tem como propósito retornar a view teste.blade.php que está dentro pasta resource->pasta view.
Nota: este tipo rota é indicado qd se quer apenas carregar uma pagina simples(ex: tela de login..)
*/
Route::get('/teste',function (){
   return view('teste'); 
});


//Esta rota tem a mesma funcão da rota acima, porem bem mas reduzida
//Route::view('/teste','teste');


/*
Rota com paramentro
Esta rota pega qualquer texto digitado apos o barra noticia, pois a mesma funciona dinamicamente, 
isso só é possivel devido o a declaração da variavel slug
*/
Route::get('/noticia/{slug}',function($slug){
    echo "TITULO: ".$slug;
});

/*
Rota com parametro
Esta rota pega qualquer texto digitado apos o barra informaçao e o barra resultado, pois a mesma funciona dinamicamente, 
isso só é possivel devido o a declaração das variaveis slug e id
*/
Route::get('/informacao/{slug}/resultado/{id}',function($slug, $id){
    echo "exibindo o resultado do " .$id. " referente a  informação ".$slug;
});

/*Rotas com regex + provider (expressões regulares). No caso do id a expressãe está montada RouteServiceProvidaer*/
Route::get('/user/{name}',function($name){
    echo "MEU NOME EH: ".$name;
})->where('name','[a-z]+');

Route::get('/user/{id}',function($id){
    echo "MINHA IDADE EH: ".$id;
});


/*
Rotas com nome + redirect. 
A nomeação de rotas é importante, pois permite capturar rotas, gerar link , fazer redirecionamentos ...
*/
Route::get('/config',function(){

//capturando o link da rota informacoes, esse recurso só foi possivel por causa da nomeação da rota info
//$link = route ('informacoes');
//echo"link ".$link;

//caso queira fazer o redirecionamento da rota para uma outra rota usar a forma abaixo 
//return redirect ()->route('permissoes');

return view('config');
});

Route::get('/config/info',function(){
    echo "tela informações";
})->name('informacoes');

Route::get('/config/permissao',function(){
    echo "tela de pemissao";
})->name('permissoes');


//Grupo de Rotas
//rota raiz
Route::prefix('/tela')->group(function(){

    //rota a ser chamada quando for acessado a raiz do site, nesse caso basta passa a barra, pois o laravel vai identificar que é preciso ir para a raiz do site
    Route::get('/',function(){
        return view('tela');
    });

    //nessa rota não necessario passar o barra tela (/tela) e barra tela2 (/tela2),porque o prefixo ja tem o (/tela) e a ROUTE ('/') ja faz o trabalho do barra que seria utilizado no '/tela2'
    Route::get('tela2',function(){
        return view('tela2');
    })->name('teladois');

    //nessa rota não necessario passar o barra tela (/tela) e barra tela3 (/tela3),porque o prefixo ja tem o (/tela) e a ROUTE ('/') ja faz o trabalho do barra que seria utilizado no '/tela2'
    Route::get('tela3',function(){
        return view('tela3');
    })->name('telatres');
});


/*
No grupo das rotas abaixo, as rotas estão sendo redirecionada para um controller, 
chamado ControllerCompeticao e nesse controllerCompeticao há os método ou funções, onde o nome
de cada uma é nome declarado após o nome do controlleCompeticao como é mostrado nas rotas abaixo,
dessa forma, as rotas estão atreladas ao ControllerCompeticao que possui os metodo ou funções que irão 
chamar as view de cada rota.

nota 1: para criar um controleer usar o comando: php artisan make:controller (iniciar com letra minuscula)
e depois nome do controller (iniciar com letra maiuscula, caso seja duas palavra usar kamikaze) 

nota 2: logo a rota de competição fica sobre a responsabilidade do ControllerCompeticao
*/
Route::prefix('/competicao')->group(function(){

    Route::get('/','CompeticaoController@index');

    Route::get('/competicaosecundaria','CompeticaoController@competicaosecundaria');

    Route::get('/competicaoterciaria','CompeticaoController@competicaoterciaria');

});

/*
O controller abaixo está dentro da pasta admin que está dentro da pasta controller,
esse procedimento não influencia no desempenho da aplicação..., apenas deixa o codigo mas organizado
*/

Route::prefix('/serieA')->group(function(){

    Route::get('/','Admin\ControllerSerie@index');

    Route::get('/serieB','Admin\ControllerSerie@serieB');

    Route::get('/serieC','Admin\ControllerSerie@serieC');

});

/*
O controller abaixo está dentro da pasta adminAnimal que está dentro da pasta controller,
esse procedimento não influencia no desempenho da aplicação..., apenas deixa o codigo mas organizado
*/

Route:: prefix('/animal')->group(function(){

    Route::get('/','AdminAnimal\ControllerAnimal@index');

    Route::get('/cachorro','AdminAnimal\ControllerAnimal@cachorro');

    Route::get('/gato','AdminAnimal\ControllerAnimal@gato');

});


/*
Esta rota sempre é criada para substituir a pagina 404 padrao do laravel, criando esta rota 
pode-se enviar o usuario para uma view criada pelo proprio programador, então todas as vezes
que o usuário tentar acessar uma url(rota) que não existe, este será redirecionado para esta view

OBS: esta rota deve ficar de preferencia no final das rotas
*/
Route::fallback(function(){
    return view('404');
});