<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *   $table->increments('id');
            $table->unsignedInteger('compra_id');
            $table->foreign('compra_id','fk_compra_inventario')->references('id')->on('compra')->onDelete('restrict')->onUpdate('restrict');
            
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            $table->timestamps();
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipoproducto_id');
            $table->foreign('tipoproducto_id', 'fk_producto_tipoproducto')->references('id')->on('tipoproducto')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombre', 50);
            $table->string('detalle',200);
            $table->double('costo', 15, 8);

            $table->unsignedInteger('stock')->nullable();
            $table->string('lote', 25)->nullable();
            $table->date('fechavencimiento')->nullable();
            
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
        Schema::dropIfExists('producto');
    }
}
