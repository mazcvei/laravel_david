<?php

namespace Database\Seeders;

use App\Models\Licencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datosInicio = ["2024-05-01","2024-05-02","2024-05-03"];
        $datosFin = ["2025-05-01","2025-05-02","2025-05-03"];
        foreach(range(0,2) as $loop){
                Licencia::create([
                    "numLicencia"=>rand(101,99999),
                    "inicioValidez"=>$datosInicio[$loop],
                    "finValidez"=>$datosFin[$loop],
                ]);
        }
    }
}
