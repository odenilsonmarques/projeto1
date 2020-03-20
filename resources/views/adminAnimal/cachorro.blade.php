<!--extendendo  o layout templates nessa view, como visto abaixo esta estrutura foi inserida no template criado-->
@extends('layouts.template')

@section('title','pagina de cachorro')

@section('content')
    
<!--essa informação foi declarada no arquivo AppServiceProvider-->
Versão: {{$versao}}


<h1>Bem - vindo a pagina de cachorro</h1>

Meu nome é {{$nome}}, tenho {{$idade}} anos.<br><br><br>

<!--usando condicionais na view(blade)-->
@if($idade > 0 && $idade<=11)
    Eu sou crianca
@elseif($idade > 11 && $idade <=18)
    Eu sou jovem
@elseif($idade >18 && $idade<=40)
    Eus sou adulto
@else
    Eu sou idoso
@endif
    
@endsection
