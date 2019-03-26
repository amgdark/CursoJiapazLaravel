@extends('layout')

@section('titulo')
    Actualizar paciente
@endsection

@section('contenido')
    <h1>Actualizar paciente</h1>
    <form action="{{ route('pacientes.update',$paciente->id) }}" method="post">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                value="{{ (@old('nombre')!=null)?@old('nombre'):$paciente->nombre}}">
                {!! $errors->first('nombre','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="apellido_pat">Apellido paterno</label>
                <input type="text" class="form-control" name="apellido_pat" id="apellido_pat"
                value="{{ (@old('apellido_pat')!=null)?@old('apellido_pat'):$paciente->apellido_pat}}">
                {!! $errors->first('apellido_pat','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="apellido_mat">Apellido materno</label>
                <input type="text" class="form-control" name="apellido_mat" id="apellido_mat"
                value="{{ (@old('apellido_mat')!=null)?@old('apellido_mat'):$paciente->apellido_mat}}">
                {!! $errors->first('apellido_mat','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="curp">CURP</label>
                <input type="text" class="form-control" name="curp" id="curp"
                value="{{ (@old('curp')!=null)?@old('curp'):$paciente->curp}}">
                {!! $errors->first('curp','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="fecha_nac">Fecha nacimiento</label>
                <input placeholder="dd/mm/YYYY" type="date" class="form-control" name="fecha_nac" id="fecha_nac"
                value="{{ (@old('fecha_nac')!=null)?@old('fecha_nac'):$paciente->fecha_nac}}">
                {!! $errors->first('fecha_nac','<span class="error">:message</span>') !!}
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        </form>
@endsection
