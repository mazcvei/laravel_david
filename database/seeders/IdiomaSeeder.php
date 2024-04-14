<?php

namespace Database\Seeders;

use App\Models\Idioma;
use App\Models\Licencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ["Español","Ingles","Frances","Aleman","Italiano"];
        foreach ($data as $idioma){
            $licenciaRandom = Licencia::inRandomOrder()->first();
            Idioma::create([
                'licencia_id'=>$licenciaRandom->id,
                'idioma'=>$idioma,
            ]);
        }
    }
}
