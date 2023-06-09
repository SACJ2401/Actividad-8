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
        Schema::create('super_heroes', function (Blueprint $table) {
            $table->id();
            $table->string('ApellidoReal');
            $table->string('NombreReal');
            $table->string('NombreHeroe');
            $table->string('Foto');
            $table->string('InfoAdicional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('super_heroes');
    }
};
