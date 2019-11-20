<?php

namespace App\Models\Clases;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';
    protected $fillable=['nombre','tipoproducto_id'];
    protected $guarded=['id'];

    public function tipoproductos()
    {
        return $this->belongsTo(Tipoproducto::class);
    }
}

