@extends('layout')

@section('titulo')
    Todos los médicos
@endsection

@section('contenido')

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>especialidad</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @forelse ($medicos as $medico)
            <tr>
                <td>{{ $medico->nombre }}</td>
                <td>{{ $medico->apellido_pat }}</td>
                <td>{{ $medico->apellido_mat }}</td>
                <td>{{ $medico->especialidad }}</td>
                <td>
                <a  class="btn btn-success btn-sm" href="{{ route('medicos.show', $medico->id)}}">Ver</a>
                <a  class="btn btn-primary btn-sm" href="{{ route('medicos.edit', $medico->id)}}">Editar</a>
                <form style="display:inline" method="POST" action="{{ route('medicos.destroy', $medico->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>No hay médicos registrados</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
