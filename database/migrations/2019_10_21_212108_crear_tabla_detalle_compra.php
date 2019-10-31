<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDetalleCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('compra_id');
            $table->foreign('compra_id', 'fk_compra_detallecompra')->references('id')->on('compra')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id', 'fk_producto_detallecompra')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedInteger('cantidad');
            $table->double('preciounitario');
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
        Schema::dropIfExists('detalle_compra');
    }
}
