<?php

namespace Database\Seeders;

use App\Models\CotoPesca;
use App\Models\Licencia;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /*
     * $table->foreignId('rol_id')->constrained('roles');
            $table->foreignId('coto_pesca_id')
                ->nullable()
                ->constrained('cotos_pesca');
            $table->foreignId('licencia_id')
                ->nullable()
                ->constrained('licencias');
            $table->foreignId('guia_pesca_id')
                ->nullable()
                ->constrained('users');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
     */
    //  $data = ["Gerente","Pescador","Guia"];
    public function run(): void
    {
        $roles = ["Gerente","Pescador"];
        $rol_guia_pesca_id = Rol::where("rol","Guia")->first()->id;
        foreach(range(0,2) as $loop){
            User::create([
                'password'=>Hash::make("123456"),
                'rol_id'=>$rol_guia_pesca_id,
                'licencia_id'=> null,
                'guia_pesca_id'=>null,
                'nombre'=>"Usuario guia ".$loop,
                'telefono'=>rand(666000000,666999999),
                'email'=>"emailguia$loop@guia.es",
            ]);
        }
        foreach($roles as $rol){
            $rol_id = Rol::where("rol",$rol)->first()->id;
            foreach(range(0,2) as $loop){
                $licenciaRandom = Licencia::inRandomOrder()->first();
                $guiaPescaRandom = User::where("rol_id",$rol_guia_pesca_id)->first();
                User::create([
                    'password'=>Hash::make("123456"),
                    'rol_id'=>$rol_id,
                    'licencia_id'=>$rol == "Pescador" ? $licenciaRandom->id : null,
                    'guia_pesca_id'=>$rol == "Pescador" ? $guiaPescaRandom->id : null,
                    'nombre'=>"Usuario $rol ".$loop,
                    'telefono'=>rand(666000000,666999999),
                    'email'=>"email$rol$loop@$rol.es",
                ]);
            }
        }
    }
}
