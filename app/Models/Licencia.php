<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    protected $table = "licencias";

    protected $fillable = ["numLicencia","inicioValidez","finValidez"];

    public function idiomas()
    {
        return $this->hasMany(Idioma::class,'licencia_id','id');
    }

}
