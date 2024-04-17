<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = "hoteles";
    protected $fillable = [
        "gerente_id","pescador_id","nombre",
        "numHabs","calificacion","precio"
    ];

    public function gerente(){
        return $this->belongsTo(User::class,"gerente_id","id");
    }
    public function pescador(){
        return $this->belongsTo(User::class,"pescador_id","id");
    }

}
