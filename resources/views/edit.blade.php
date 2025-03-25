@extends('layouts.base')

@section('content')
<form action="{{ route('update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <strong>Estado (inicial): </strong>
        <select name="status" class="form-select" id="status">
            <option value="">-- Elige el status --</option>
            <option value="Pendiente">Pendiente</option>
            <option value="En progreso">En progreso</option>
            <option value="Completada">Completada</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success mt-3">Actualizar</button>
</form>
@endsection
