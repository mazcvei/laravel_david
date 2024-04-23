@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Usuarios</h1> <a href="{{route('user.create')}}" class="btn btn-primary">Crear usuario</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Licencia</th>
                    <th scope="col">Guia</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}} </td>
                        <td>{{$user->rol->rol}} </td>
                        <td>{{$user->licencia->numLicencia ?? 'Sin licencia'}} </td>
                        <td>{{$user->guia->nombre ?? 'Sin guia'}} </td>
                        <td>{{$user->nombre}} </td>
                        <td>{{$user->telefono}} </td>
                        <td>{{$user->email}} </td>
                        <td>
                            <a href="{{route('user.edit',$user->id)}}" class="btn btn-info">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('user.destroy',['user'=>$user->id])}}" method="POST">
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
