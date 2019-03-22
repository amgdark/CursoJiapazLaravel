@extends('layout')

@section('titulo')
    Contacto
@endsection

@section('contenido')
    <h1>Contacto</h1>

    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach

    <form action="{{ route('procesa_contacto') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{@old('nombre')}}">
                {!! $errors->first('nombre','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{@old('email')}}">
                {!! $errors->first('email','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10">{{@old('mensaje')}}</textarea>
                {!! $errors->first('mensaje','<span class="error">:message</span>') !!}
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
@endsection
