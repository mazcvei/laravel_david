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
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gerente_id')->nullable()->constrained('users');
            $table->foreignId('pescador_id')->nullable()->constrained('users');
            $table->string("nombre");
            $table->integer("numHabs");
            $table->integer("calificacion");
            $table->double("precio",10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
