@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h2>Agregar nuevo registro</h2>
        <div class="row">
            <div class="col">
                <form action="/store" method="POST">
                    @csrf
                    @method('POST')
                    <label for="paterno">Apellido paterno</label>
                    <input class="form-control" type="text" name="paterno" id="paterno" required>
                    <label for="nombre">Nombre(s)</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" required>
                    <button class="btn btn-outline-primary mt-3">Guardar</button>
                    <a href="/" class="btn btn-outline-secondary mt-3">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection