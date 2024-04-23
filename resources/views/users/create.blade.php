@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Crear usuario</h1>

        <form method="post">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Rol</label>
                    <select class="form-control" type="text" name="rol">
                        @php($roles = \App\Models\Rol::all())
                        @foreach($roles as $rol)
                            <option value="{{$rol->id}}">{{$rol->rol}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Guia</label>
                    <select class="form-control" type="text" name="rol">
                        @php($guias = \App\Models\User::where('rol_id',3)->get())
                        <option value="">Sin guia</option>
                        @foreach($guias as $guia)
                            <option value="{{$guia->id}}">{{$guia->nombre}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Telefono</label>
                    <input class="form-control" type="text" name="telefono">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>
            </div>

            <input class="btn btn-primary" type="submit" value="Crear usuario">
        </form>
    </div>

@endsection
