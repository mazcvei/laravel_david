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
        Schema::create('coto_pesca_pescador_pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coto_pesca_id')->constrained('cotos_pesca');
            $table->foreignId('pescador_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coto_pesca_pescador_pivots');
    }
};
