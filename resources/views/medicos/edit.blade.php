@extends('layout')

@section('titulo')
    Actualizar médico
@endsection

@section('contenido')
    <h1>Actualizar médico</h1>
    <form action="{{ route('medicos.update',$medico->id) }}" method="post">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                value="{{ (@old('nombre')!=null)?@old('nombre'):$medico->nombre}}">
                {!! $errors->first('nombre','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="app">Apellido paterno</label>
                <input type="text" class="form-control" name="app" id="app"
                value="{{ (@old('app')!=null)?@old('app'):$medico->apellido_pat}}">
                {!! $errors->first('app','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="apm">Apellido materno</label>
                <input type="text" class="form-control" name="apm" id="apm"
                value="{{ (@old('apm')!=null)?@old('apm'):$medico->apellido_mat}}">
                {!! $errors->first('apm','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="tel">Teléfono</label>
                <input type="tel" class="form-control" name="tel" id="tel"
                value="{{ (@old('tel')!=null)?@old('tel'):$medico->telefono}}">
                {!! $errors->first('tel','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="cel">Célular</label>
                <input type="cel" class="form-control" name="cel" id="cel"
                value="{{ (@old('cel')!=null)?@old('cel'):$medico->celular}}">
                {!! $errors->first('cel','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" min="1" max="130" name="edad" class="form-control"
                value="{{ (@old('edad')!=null)?@old('edad'):$medico->edad}}">
                {!! $errors->first('edad','<span class="error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label for="dir">Dirección</label>
                <input type="dir" class="form-control" name="dir" id="dir"
                value="{{ (@old('dir')!=null)?@old('dir'):$medico->direccion}}">

                {!! $errors->first('dir','<span class="error">La dirección es requerida</span>') !!}
            </div>
            <div class="form-group">
                <label for="esp">Especialidad</label>
                <input type="esp" class="form-control" name="esp" id="esp"
                value="{{ (@old('esp')!=null)?@old('esp'):$medico->especialidad}}">

                {!! $errors->first('esp','<span class="error">:message</span>') !!}
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        </form>
@endsection
