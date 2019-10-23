<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProveedorProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('proveedor_id');
            $table->foreign('proveedor_id', 'fk_proveedor_producto')->references('id')->on('proveedor')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id', 'fk_proveedorproducto_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor_producto');
    }
}
