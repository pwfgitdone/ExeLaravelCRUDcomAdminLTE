@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    <p>Você está na página inicial.</p>
    <p>Seu login: {{ auth()->user()->name }}</p>
    <p>Seu email: {{ auth()->user()->email }}</p>
    <p>Seu email foi verificado: {{ auth()->user()->email_verified_at }}</p>
    <p>Seu celular: {{ auth()->user()->mobile }}</p>
    <p>Seu celular foi verificado: {{ auth()->user()->mobile_verified_at }}</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop