<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'nombre',
        'apellido',
        'email',
        'fecha_nacimiento',
        'documento',
        'genero',
        'estado_civil',
        'telefono',
        'instrumento_estudio',
        'reglamento',
        'fecha_desde',
        'fecha_hasta',
        'password',
        'id_rol',
        'id_estado',
        'id_filial'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function tipos_usuario(){
    //     return $this->belongsToMany(TipoUsuario::class, 'usuario_tipo_usuario', 'usuario_id', 'tipo_usuario_id')->withPivot('id');
    // }

    // public function rondas(){
    //     return $this->hasMany(Ronda::class);
    // }

    // public function areas(){
    //     return $this->belongsToMany(Area::class, 'area_usuario', 'user_id', 'area_id')->withPivot('id', 'es_jefe');
    // }
}
