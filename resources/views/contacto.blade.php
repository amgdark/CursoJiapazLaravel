@extends('layout')

@section('titulo')
    Contacto
@endsection

@section('contenido')
    <h1>Contacto</h1>

    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

    <form action="{{ route('procesa_contacto') }}" method="post">
            @csrf
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">

            </p>
            <p>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            </p>
            <button type="submit">Enviar</button>
        </form>
@endsection
