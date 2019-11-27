<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $fillable=['cliente_id','empleado_id','fecha','descripcion'];
    protected $guarded=['id'];

    public function clientes(){
        return $this->belongsToMany(Cliente::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class)->withPivot('cantidad','preciounitario','subtotal');
    }
}
