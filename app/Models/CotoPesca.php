<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CotoPesca extends Model
{
    use HasFactory;
    protected $table = "cotos_pesca";
    protected $fillable = ["longitud","localidad","rio","especie"];

}
