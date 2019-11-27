<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clases\Persona;

class Proveedor extends Model
{
    protected $table='proveedor';
    protected $fillable=['persona_id','rubro','nacionalidad','razonsocial'];
    protected $guarded=['id'];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    public function Compras(){
        return $this->hasMany(Compra::class);        
    }
    
}
