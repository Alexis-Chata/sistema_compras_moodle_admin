<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('cajero_id')->nullable();
            $table->char('tipo_comprobante')->default(1);
            $table->date('femision');
            $table->string('correlativo')->nullable();
            $table->string('termino');
            $table->double('total');
            #devoluciones
            $table->unsignedBigInteger('comprobante_ref_id')->nullable();
            $table->string('tipo_ref')->nullable();
            $table->string('correlativo_ref')->nullable();
            #recibo con deposito
            $table->string('imagen_deposito')->nullable();
            $table->string('path_pdf')->nullable();
            $table->foreign('cajero_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('comprobante_ref_id')->references('id')->on('comprobantes')->onDelete('cascade');
            $table->char('estado')->default(1);
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobantes');
    }
};
