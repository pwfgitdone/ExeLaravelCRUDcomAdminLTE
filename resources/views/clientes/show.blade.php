@extends('clientes.layout')

@section('title', 'Clientes')

@section('content')

<div class="card" style="margin: 20px;">
  <div class="card-header">Ver Cliente</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">Nome: {{ $clientes->nome }}</h5>
      <p class="card-text">Telefone: {{ $clientes->telefone }}</p>
      <p class="card-text">Endereço: {{ $clientes->endereco }}</p>
    </div>
  </div>
</div>


@stop