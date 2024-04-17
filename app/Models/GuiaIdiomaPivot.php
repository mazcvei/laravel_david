<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaIdiomaPivot extends Model
{
    use HasFactory;
    protected $table = "guias_idiomas_pivot";
    protected $fillable = ["user_id","idioma_id"];
    public function usuario()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function idioma()
    {
        return $this->belongsTo(Idioma::class,"idioma_id","id");
    }

}
