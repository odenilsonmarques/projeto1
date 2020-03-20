@extends('layouts.template')

@section('title','pagina de gato')
    
@section('content')

<h1>Bem - vido A a pagina do gato</h1>

<!--chamando o componente alert nesa view, o conteudo dentro desse component será armazenado na variavel $slot declarada no arquivo alert.blade.php-->
@component('components.alert')
    testando alert mensagem 2...
@endcomponent
    

<br><br>o nome do gato é {{$nomeGato}} eu tenho {{$idadeGato}} anos.<br><br><br>

<!--usando lacos condicioinais na view(blade)-->
@for($numero = 0;$numero<10;$numero++)
    O valor é {{$numero}}.<br>
@endfor

@endsection



