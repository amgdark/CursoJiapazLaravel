@extends('layout')

@section('titulo')
    Todos los pacientes
@endsection

@section('contenido')

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>CURP</th>
        <th>Fecha de nacimiento</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @forelse ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellido_pat }}</td>
                <td>{{ $paciente->apellido_mat }}</td>
                <td>{{ $paciente->curp }}</td>
                <td>{{ $paciente->fecha_nac }}</td>
                <td>
                <a  class="btn btn-success btn-sm" href="{{ route('pacientes.show', $paciente->id)}}">Ver</a>
                <a  class="btn btn-primary btn-sm" href="{{ route('pacientes.edit', $paciente->id)}}">Editar</a>
                <form style="display:inline" method="POST" action="{{ route('pacientes.destroy', $paciente->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>No hay pacientes registrados</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
