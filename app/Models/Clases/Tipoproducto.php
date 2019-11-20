<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    protected $table='tipoproducto';
    protected $fillable=[
        'nombre',
    ];
    protected $guarded=['id'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

}
