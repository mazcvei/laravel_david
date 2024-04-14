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
        Schema::create('cotos_pesca', function (Blueprint $table) {
            $table->id();
            $table->double("longitud",10,2);
            $table->string("localidad");
            $table->string("rio");
            $table->string("especie");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coto_pescas');
    }
};
