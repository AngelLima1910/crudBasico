@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h2>
            CRUD Básico con Laravel 8
        </h2>
        <div class="row">
            <div class="col">
                <a href="/create" class="btn btn-outline-primary">Agregar nueva persona</a>
                <hr>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th class="text-center">Apellido paterno</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td class="text-center">{{$item->paterno}}</td>
                            <td class="text-center">{{$item->nombre}}</td>
                            <td class="text-center">
                                <a href="{{ route('edit', $item->id) }}" class="btn btn-outline-warning">
                                    Editar
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('show', $item->id)}}" class="btn btn-outline-danger">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection