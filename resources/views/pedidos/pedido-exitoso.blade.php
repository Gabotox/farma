<!-- resources/views/pedidos/pedido-exitoso.blade.php -->
@extends('layouts.app')

@section('title', 'Pedido Exitoso') <!-- Define el título específico de esta página -->

@section('content')
@if(session('mensajeExito'))
<div class="alert alert-success mt-5">{{ session('mensajeExito') }}</div>
@endif

<h2> Pedido relaizado al distribuidor: <span class="bond">{{ session('titulo') }}</span></h2>
<p>Usted a solicitado
    <span class="bond">{{ session('cantidad') }}</span>
    unidades del <span class="bond">{{ session('tipo') }}
        {{ session('nombre_medicamento') }}</span>
</p>
<p>Pedido enviado a la 
    <span class="bond">{{ session('sucursal') }}</span>
    ubicada en la 
    <span class="bond">{{ session('direccion_sucursal') }}</span>
</p>

<a href="{{ route('pedidos.index') }}" class="btn btn-pedido">Lista de pedidos</a>
@endsection