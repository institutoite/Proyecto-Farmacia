<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    protected $fillable=['','',''];


    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
