@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Crear Hotel</h1>
        <form method="post">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Nº habitaciones</label>
                    <input class="form-control" type="number" min="1" max="1000" name="numHabs">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Calificacion</label>
                    <input class="form-control" type="number" min="1" max="5" name="calificacion">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Precio</label>
                    <input class="form-control" type="number" step="0.1" name="precio">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Crear usuario">
        </form>
    </div>

@endsection
