@extends('layout')

@section('titulo')
    Saludo
@endsection

@section('contenido')
    <h1>Saludo</h1>
    <h1>Hola {{ $nombre }}, tienes {{ $edad }} años</h1>
@endsection
