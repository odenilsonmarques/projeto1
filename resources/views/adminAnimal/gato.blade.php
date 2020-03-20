@extends('layouts.template')

@section('title','pagina de gato')
    
@section('content')

<h1>Bem - vido A a pagina do gato</h1>

o nome do gato é {{$nomeGato}} eu tenho {{$idadeGato}} anos.<br><br><br>

<!--usando lacos condicioinais na view(blade)-->
@for($numero = 0;$numero<10;$numero++)
    O valor é {{$numero}}.<br>
@endfor

@endsection



