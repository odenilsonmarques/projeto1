
<!--extendendo  o layout templates nessa view, como visto abaixo esta estrutura foi inserida no template criado-->
@extends('layouts.template')

@section('title','pagina de animal')

@section('content')
    
<h1>BEM - VINDO A PAGINA DE ANIMAL</h1>

<form method="GET">
    NOME:<br>
    <input type="text" name="nome"><br><br>

    IDADE:<br>
    <input type="text" name="idade"><br><br>

    <input type="submit" value="ENVIAR">
</form>

@endsection


<!--
os dados do formulário acima serão enviado para mesma página, além disso, 
este serão recebido pelo parametro $request, declarado na função ou método index que está dentro 
do controllerAnimal 
-->