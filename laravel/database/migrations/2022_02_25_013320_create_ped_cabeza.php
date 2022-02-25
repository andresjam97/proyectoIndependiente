<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedCabeza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ped_cabeza', function (Blueprint $table) {
            $table->id();
            $table->string('id_cliente')->nullable();
            $table->string('cuentaCliente')->nullable();
            $table->string('razonSocial')->nullable();
            $table->string('nit')->nullable();
            $table->string('region')->nullable();
            $table->string('direccionEntrega')->nullable();
            $table->string('vendedor')->nullable();
            $table->string('fechaRegistro')->nullable();
            $table->string('usuario')->nullable();
            $table->string('estado')->nullable();
            $table->string('observacion')->nullable();
            $table->string('ordenCompra')->nullable();
            $table->string('fechaOrden')->nullable();
            $table->string('nombreArchivo')->nullable();
            $table->string('fechaEntrega')->nullable();
            $table->string('procesado')->nullable();
            $table->string('observacionRechazo')->nullable();
            $table->timestamps();
            $table->softDeletes();     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ped_cabeza');
    }
}
