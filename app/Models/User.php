<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "users";

    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'password',
        'rol_id',
        'licencia_id',
        'guia_pesca_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function rol(){
        return $this->belongsTo(Rol::class,'rol_id','id');
    }
    public function guia(){
        return $this->belongsTo(User::class,'guia_pesca_id','id');
    }
    public function licencia(){
        return $this->hasOne(Licencia::class,'id','licencia_id');
    }

    public function hotelesGestionados()
    {
         return $this->hasMany(Hotel::class,'gerente_id','id');
    }
    public function hotelesReservados()
    {
        return $this->hasMany(Hotel::class,'pescador_id','id');
    }

    public function cotosPescaPivot()
    {
        return $this->hasMany(CotoPescaPescadorPivot::class,'pescador_id','id');
    }

    public function idiomas()
    {
        return $this->hasMany(GuiaIdiomaPivot::class,'user_id','id');
    }
}
