@extends('layout')

@section('contenido')
<h1>Bienvenido al sistema</h1>
@if (session()->has('warning'))
    <div class="alert alert-warning">
        {{session('warning')}}
    </div>

@endif
@if (session()->has('info'))
    <div class="alert alert-warning">
        {{session('info')}}
    </div>

@endif
@endsection
