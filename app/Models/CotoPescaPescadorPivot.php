<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CotoPescaPescadorPivot extends Model
{
    use HasFactory;
    protected $table = "coto_pesca_pescador_pivots";
    protected $fillable = ["coto_pesca_id","pescador_id"];

    public function cotoPesca()
    {
        return $this->belongsTo(CotoPesca::class,"coto_pesca_id","id");
    }

    public function pescador()
    {
        return $this->belongsTo(User::class,"pescador_id","id");
    }
}
