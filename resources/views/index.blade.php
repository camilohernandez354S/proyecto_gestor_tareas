@extends('layouts.base')

@section('content')
<div class="row">

    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <div>
            <a href="{{ route('create') }}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>
    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <thead>
                <tr class="text-secondary">
                    <th>#</th>
                    <th>Tarea</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="fw-bold">{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        {{ $task->created_at }}
                    </td>
                    <td>
                        <span class="badge bg-warning fs-6">{{ $task->status }}</span>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('edit', $task->id) }}" class="btn btn-warning">Editar</a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('destroy', $task->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection