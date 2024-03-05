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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); //Clave primaria
            $table->string('rol');
            $table->timestamps();

            //FK de usuarios a grupos
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')
                ->references('id')
                ->on('grupos')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
