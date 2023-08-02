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
            $table->softDeletes();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('cajero_id')->nullable();
            $table->date('femision');
            $table->string('correlativo')->nullable();
            $table->string('termino');
            $table->double('total');
            $table->string('path_pdf')->nullable();
            $table->foreign('cajero_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('cascade');
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
