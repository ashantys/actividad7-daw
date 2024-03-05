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
            $table->id();//ClavePrimaria
            $table->string('contenido');
            $table->string('titulo');
            $table->string('portada');
            $table->timestamps();

            //FK de cursos a kits
            $table->unsignedBigInteger('id_kits');
            $table->foreign('id_kits')
                ->references('id')
                ->on('kits')
                ->onDelete('cascade');
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
