@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>El dato a eliminar es </h2>
                <ul>
                    <li>El apellido es: {{ $items->paterno }}</li>
                    <li>El nombre es: {{ $items->nombre }}</li>
                </ul>
                <form action="{{ route('destroy', $items->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/" class="btn btn-outline-secondary mt-3">Regresar</a>
                    <button class="btn btn-outline-danger mt-3">
                        Eliminar definitivamente
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection