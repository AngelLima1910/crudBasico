@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h2>Actualizar registro</h2>
        <div class="row">
            <div class="col">
                <form action="{{ route('update', $items->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="paterno">Apellido paterno</label>
                    <input class="form-control" type="text" name="paterno" id="paterno" value="{{ $items->paterno }}" required>
                    <label for="nombre">Nombre(s)</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $items->nombre }}" required>
                    <button class="btn btn-outline-warning mt-3">Actualizar</button>
                    <a href="/" class="btn btn-outline-info mt-3">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection