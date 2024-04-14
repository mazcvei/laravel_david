<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ["Gerente","Pescador","Guia"];
        foreach ($data as $rol){
            Rol::create([
                'rol'=>$rol
            ]);
        }
    }
}
