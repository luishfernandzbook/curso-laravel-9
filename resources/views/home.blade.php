@extends('app') <!-- extends llama a la PLANTILLA MAESTRA -->

@section('title', 'Home') <!-- Es el que reemplaza a los yields, en este caso solo con un parametro-->

@section('content')       <!-- Es el que reemplaza a los yields, en este caso con contenido-->
<div class="container">
    <h1>Bienvenido al curso de Laravel 9</h1>
</div>
@endsection