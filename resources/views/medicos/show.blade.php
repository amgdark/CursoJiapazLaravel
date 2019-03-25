@extends('layout')

@section('titulo')
    Médico

@endsection

@section('contenido')

<a href="{{route('medicos.index')}}" class="btn btn-success">Regresar</a>
<table>
    <tr>
        <td align="right">Nombre: </td>
        <td>{{$medico->nombre}}</td>
    </tr>
    <tr>
        <td>Apellidos</td>
        <td>{{$medico->apellido_pat}} {{$medico->apellido_mat}}</td>
    </tr>
    <tr>
        <td>Teléfono</td>
        <td>{{$medico->telefono}}</td>
    </tr>
    <tr>
        <td>Celular</td>
        <td>{{$medico->celular}}</td>
    </tr>
    <tr>
        <td>Dirección</td>
        <td>{{$medico->direccion}}</td>
    </tr>
    <tr>
        <td>Edad</td>
        <td>{{$medico->edad}}</td>
    </tr>
    <tr>
        <td>Especlialidad</td>
        <td>{{$medico->especialidad}}</td>
    </tr>
</table>

@endsection
