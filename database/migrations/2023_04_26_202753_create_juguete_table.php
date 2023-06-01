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
        Schema::create('juguetes', function (Blueprint $table) {
            $table->id('id');
            $table->string('producto');
            $table->string('rutaImagen')->nullable();
            $table->string('marca');
            $table->double('precio');
            $table->Integer('proveedor_id')->nullable();
            $table->Integer('almacen_id')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juguetes');
    }
};
