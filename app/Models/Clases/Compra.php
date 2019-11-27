<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    
    protected $table='compra';
    protected $fillable=['proveedor_id','fecha','observacion'];
    protected $guarded=['id'];
    
    
    public function productos(){
       
        return $this->belongsToMany(Producto::class,'compra_producto')->withPivot('cantidad','preciounitario','subtotal');
        
    } 

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
}
