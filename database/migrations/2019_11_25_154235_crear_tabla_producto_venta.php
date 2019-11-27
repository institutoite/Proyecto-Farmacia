<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProductoVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_venta', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('venta_id');
            $table->foreign('venta_id', 'fk_producto_venta_detalle')->references('id')->on('venta')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id', 'fk_producto_venta')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('cantidad');
            $table->double('preciounitario');
            $table->double('subtotal');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
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
        Schema::dropIfExists('producto_venta');
    }
}
