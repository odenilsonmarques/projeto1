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


//Esta rota pega qualquer texto digitado apos o barra noticia, pois a mesma funciona dinamicamente, isso só é possivel devido o a declaração da variavel slug
Route::get('/noticia/{slug}',function($slug){
    echo "TITULO: ".$slug;
});

//Esta rota pega qualquer texto digitado apos o barra informaçã e o barra resultado, pois a mesma funciona dinamicamente, isso só é possivel devido o a declaração da variavel slug
Route::get('/informacao/{slug}/resultado/{id}',function($slug, $id){
    echo "exibindo o resultado do " .$id. " referente a  informação ".$slug;

});