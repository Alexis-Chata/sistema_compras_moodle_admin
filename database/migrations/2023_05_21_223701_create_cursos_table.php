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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('shortname');
            $table->string('imagen')->nullable();
            $table->string('descripcion')->nullable();
            $table->longText('resumen')->nullable();
            $table->string('link_video')->nullable();
            $table->char('id_moodle_course')->nullable();
            $table->char('estado')->default(1)->nullable();
            #datos adicionales
            $table->string('idioma')->default('Español')->nullable();
            $table->string('duracion')->nullable();
            $table->char('certificado')->default(1)->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('cursos');
    }
};
