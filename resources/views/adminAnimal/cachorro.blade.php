<!--extendendo  o layout templates nessa view, como visto abaixo esta estrutura foi inserida no template criado-->
@extends('layouts.template')

@section('title','pagina de cachorro')

@section('content')
    
<!--essa informação foi declarada no arquivo AppServiceProvider-->
Versão: {{$versao}}


<h1>Bem - vindo a pagina de cachorro</h1>

Meu nome é {{$nome}}, tenho {{$idade}} anos
    
@endsection
