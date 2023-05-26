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
        Schema::create('juguete', function (Blueprint $table) {
            $table->id('juguete_id');
            $table->string('nombre');
            $table->string('rutaImagen')->nullable;
            $table->string('marca');
            $table->double('precio');
            $table->Integer('proveedor_id');
            $table->Integer('almacen_id');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juguete');
    }
};
