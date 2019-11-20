<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clases\Persona;

class Empleado extends Model
{
    protected $table='empleado';
    protected $fillable=['persona_id','sueldo','fechaingreso'];
    protected $guarded=['id'];

    public function persona(){
        return $this->belongsTo(Persona::class);
    }
    
    
}
