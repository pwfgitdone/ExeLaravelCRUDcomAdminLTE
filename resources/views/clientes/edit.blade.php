@extends('clientes.layout')

@section('content')

<div class="card" style="margin: 20px;">
  <div class="card-header">Editar Cliente</div>
  <div class="card-body">
    <form action="{{ url('cliente/' . $clientes->id) }}" method="POST">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{ $clientes->id }}"><br>

      <label for="">Nome</label><br>
      <input type="text" name="nome" id="nome" value="{{ $clientes->nome }}" class="form-control"><br>

      <label for="">Telefone</label>
      <input type="text" name="telefone" id="telefone" value="{{ $clientes->telefone }}" class="form-control"><br>

      <label for="">Endereço</label>
      <input type="text" name="endereco" id="endereco" value="{{ $clientes->endereco }}" class="form-control"><br>

      <input type="submit" value="Atualizar" class="btn btn-success"><br>
    </form>
  </div>
</div>


@stop