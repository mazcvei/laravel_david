@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Hoteles</h1>
        <a href="{{route('user.create')}}" class="btn btn-primary">Crear hotel</a>
        <a href="{{route('asignar.hotel')}}" class="btn btn-primary">Asignar hotel a pescador</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Numero habitaciones</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hoteles as $hotel)
                    <tr>
                        <td>{{$hotel->id}} </td>
                        <td>{{$hotel->nombre}} </td>
                        <td>{{$hotel->numHabs}} </td>
                        <td>{{$hotel->calificacion}} </td>
                        <td>{{$hotel->precio}} </td>
                        <td>
                            <a href="{{route('hotel.edit',$hotel->id)}}" class="btn btn-info">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('hotel.destroy',['hotel'=>$hotel->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Estas seguro que deseas eliminar?')">Eliminar
                                </button>
                            </form>
                         </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
