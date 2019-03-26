@extends('layout')

@section('titulo')
    Paciente

@endsection

@section('contenido')

<a href="{{route('pacientes.index')}}" class="btn btn-success">Regresar</a>
<table>
    <tr>
        <td align="right">Nombre: </td>
        <td>{{$paciente->nombre}}</td>
    </tr>
    <tr>
        <td>Apellidos</td>
        <td>{{$paciente->apellido_pat}} {{$paciente->apellido_mat}}</td>
    </tr>
    <tr>
        <td>CURP</td>
        <td>{{$paciente->curp}}</td>
    </tr>
    <tr>
        <td>Fecha de nacimiento</td>
        <td>{{ date('d-m-Y', strtotime($paciente->fecha_nac)) }}</td>
    </tr>
</table>

@endsection
