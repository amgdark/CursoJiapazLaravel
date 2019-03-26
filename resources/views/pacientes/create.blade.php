@extends('layout')

@section('titulo')
    Pacientes
@endsection

@section('contenido')
@foreach ($errors->all() as $error)
    {{$error}}
@endforeach

<form action="{{ route('pacientes.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{@old('nombre')}}">
        {!! $errors->first('nombre','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="apellido_pat">Apellido paterno</label>
        <input type="text" class="form-control" name="apellido_pat" id="apellido_pat" value="{{@old('apellido_pat')}}">
        {!! $errors->first('apellido_pat','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="apellido_mat">Apellido materno</label>
        <input type="text" class="form-control" name="apellido_mat" id="apellido_mat" value="{{@old('apellido_mat')}}">
        {!! $errors->first('apellido_mat','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="curp">CURP</label>
        <input type="text" class="form-control" name="curp" id="curp" value="{{@old('curp')}}" onblur="this.value=this.value.toUpperCase()">
        {!! $errors->first('curp','<span class="error">:message</span>') !!}
    </div>
    <div class="form-group">
        <label for="fecha_nac">Fecha de nacimiento</label>
        <input placeholder="dd/mm/YYYY" type="date" class="form-control" name="fecha_nac" id="fecha_nac" value="{{@old('fecha_nac')}}">
        {!! $errors->first('fecha_nac','<span class="error">:message</span>') !!}
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>
@endsection
