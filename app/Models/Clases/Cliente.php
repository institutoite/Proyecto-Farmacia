<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    protected $fillable=['persona_id','carnet'];
    protected $guarded=['id'];


    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}
