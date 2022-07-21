@extends('clientes.layout')

@section('title', 'Clientes')

@section('content')

<div class="card" style="margin: 20px;">
  <div class="card-header">Novo Cliente</div>
  <div class="card-body">
    <form action="{{ url('cliente') }}" method="POST">
      {!! csrf_field() !!}
      <label for="">Nome</label><br>
      <input type="text" name="nome" id="nome" class="form-control"><br>

      <label for="">Telefone</label>
      <input type="text" name="telefone" id="telefone" class="form-control"><br>

      <label for="">Endereço</label>
      <input type="text" name="endereco" id="endereco" class="form-control"><br>

      <input type="submit" value="Salvar" class="btn btn-success"><br>
    </form>
  </div>
</div>


@stop