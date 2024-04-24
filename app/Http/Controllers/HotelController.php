<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hoteles = Hotel::all();
        return view('hoteles.index',compact('hoteles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hoteles.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotel = Hotel::find($id);
        return view('hoteles.edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::find($id);
        if($hotel){
            $hotel->delete();
            return redirect()->route('hotel.index');
        }else{
            return "No se encuentra el hotel";
        }
    }
    public function form_asignar_usuario()
    {
        return view('hoteles.asignar_usuario');
    }
    public function asignar_hotel_pescador(Request $request){
        $hotel = Hotel::find($request->hotel_id);
        Hotel::create([
            'pescador_id'=>$request->pescador_id,
            'gerente_id'=>$request->gerente_id,
            'nombre'=>$hotel->nombre,
            'numHabs'=>$hotel->numHabs,
            'calificacion'=>$hotel->calificacion,
            'precio'=>$hotel->precio,
        ]);
    }
}
