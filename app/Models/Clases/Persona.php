<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';
    protected $fillable=['nombre','apellidop','apellidom','fechanacimiento','direccion','genero','telefono','celular'];
    protected $guarded=['id'];
}
