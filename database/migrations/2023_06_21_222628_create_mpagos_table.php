<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cmatricula_id');
            $table->unsignedBigInteger('cuota_id');
            $table->unsignedBigInteger('detalle_id');
            $table->foreign('cmatricula_id')->references('id')->on('cmatriculas')->onDelete('cascade');
            $table->foreign('cuota_id')->references('id')->on('cuotas')->onDelete('cascade');
            $table->foreign('detalle_id')->references('id')->on('detalles')->onDelete('cascade');
            $table->date('fpago');
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
        Schema::dropIfExists('mpagos');
    }
};
