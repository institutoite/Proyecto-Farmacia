<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venta_id');
            $table->foreign('venta_id', 'fk_venta_detalleventa')->references('id')->on('venta')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('inventario_id');
            $table->foreign('inventario_id', 'fk_inventario_detalleventa')->references('id')->on('inventario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('cantidad');
            $table->double('preciounitario');
            $table->timestamps();
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
}
