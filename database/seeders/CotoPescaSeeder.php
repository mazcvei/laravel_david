<?php

namespace Database\Seeders;

use App\Models\CotoPesca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CotoPescaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /*
     * $table->double("longitud",10,2);
            $table->string("localidad");
            $table->string("rio");
            $table->string("especie");
     */
    public function run(): void
    {
        $localidades = ["Uña","Villora","Valencia"];
        $rios = ["Jucar","Cabriel","Turia"];
        $especies = ["Trucha","Salvelino","Barbo"];
        foreach (range(0,2) as $loop){
            CotoPesca::create([
                "longitud"=> 25.84,
                "localidad"=>$localidades[$loop],
                "rio"=>$rios[$loop],
                "especie"=>$especies[$loop],
            ]);
        }
    }
}
