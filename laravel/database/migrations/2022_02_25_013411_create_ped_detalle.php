<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ped_detalle', function (Blueprint $table) {
            $table->id();
            $table->string('consecutivo')->nullable();
            $table->string('id_prod')->nullable();
            $table->string('codigo_prod')->nullable();
            $table->string('nombre')->nullable();
            $table->string('precio')->nullable();
            $table->string('principio')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('bonificadas')->nullable();
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
        Schema::dropIfExists('ped_detalle');
    }
}
