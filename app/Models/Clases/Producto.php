<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table='producto';
    protected $fillable=['nombre','tipoproducto_id','detalle','costo', 'stock', 'lote', 'fechavencimiento'];
    protected $guarded=['id'];

    public function tipoproductos()
    {
        return $this->belongsTo(Tipoproducto::class);
    }
    public function compras(){
        return $this->belongsToMany(Compra::class,'detalle_compra');
    } 
    public static function produtillos(){
        return Producto::all();
    }

    public function ventas()
    {
        return $this->belongsToMany(Venta::class);
    }


    
}

