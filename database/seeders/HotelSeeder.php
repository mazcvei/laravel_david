<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
            $data = [
                [
                    "nombre"=>"The Ritz-Carlton",
                    "numHabs"=>"500",
                    "calificacion"=>"5",
                    "precio"=>"105",
                ],
                [
                    "nombre"=>"Four Seasons",
                    "numHabs"=>"800",
                    "calificacion"=>"5",
                    "precio"=>"98",
                ],
                [
                    "nombre"=>"Waldorf Astoria",
                    "numHabs"=>"450",
                    "calificacion"=>"4",
                    "precio"=>"110",
                ],
            ];

        foreach ($data as $hotel){
            Hotel::create([
                'nombre'=>$hotel['nombre'],
                'numHabs'=>$hotel['numHabs'],
                'calificacion'=>$hotel['calificacion'],
                'precio'=>$hotel['precio'],
            ]);
        }
    }
}
