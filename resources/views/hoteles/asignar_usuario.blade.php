@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Reservar hotel</h1>
        <form action="{{route('reservar')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Pescador</label>
                <select class="form-control block mt-1 w-full" type="text" name="pescador_id">
                    @php($pescadores = \App\Models\User::where('rol_id',2)->get())
                    <option value="">Sin guia</option>
                    @foreach($pescadores as $pescador)
                        <option value="{{$pescador->id}}">{{$pescador->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Hoteles</label>
                <select class="form-control block mt-1 w-full" type="text" name="hotel_id">
                    @php($hoteles = \App\Models\Hotel::select('id','nombre')->groupBy('id','nombre')->get())
                    @foreach($hoteles as $hotel)
                        <option value="{{$hotel->id}}">{{$hotel->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <input class="btn btn-primary" type="submit" value="Reservar">
        </form>
    </div>

@endsection
