@extends('layout')

@section('titulo')
    Médicos
@endsection

@section('contenido')
<form action="{{ route('medicos.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{@old('nombre')}}">
        {!! $errors->first('nombre','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="app">Apellido paterno</label>
        <input type="text" class="form-control" name="app" id="app" value="{{@old('app')}}">
        {!! $errors->first('app','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="apm">Apellido materno</label>
        <input type="text" class="form-control" name="apm" id="apm" value="{{@old('apm')}}">
        {!! $errors->first('apm','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="tel">Teléfono</label>
        <input type="tel" class="form-control" name="tel" id="tel" value="{{@old('tel')}}">
        {!! $errors->first('tel','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="cel">Célular</label>
        <input type="cel" class="form-control" name="cel" id="cel" value="{{@old('cel')}}">
        {!! $errors->first('cel','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="edad">Edad</label>
        <input type="number" min="1" max="130" name="edad" class="form-control" id="edad" value="{{@old('edad')}}">
        {!! $errors->first('edad','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="dir">Dirección</label>
        <input type="text" class="form-control" name="dir" id="dir" value="{{@old('dir')}}">

        {!! $errors->first('dir','<span class="error">La dirección es requerida</span>') !!}
    </div>
    <div class="form-group">
        <label for="esp">Especialidad</label>
        <input type="text" class="form-control" name="esp" id="esp" value="{{@old('esp')}}">

        {!! $errors->first('esp','<span class="error">:message</span>') !!}
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>
@endsection
