<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    use HasFactory;
    protected $table = 'filial';
    protected $primaryKey = 'id';
    protected $fillable = ['pais', 'provincia','localidad','ciudad','codigo_postal','direccion'];
}
