<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->integer("Cou");
            $table->integer("Epaule");
            $table->integer("Bras");
            $table->integer("Poitrine");
            $table->integer("Poignet");
            $table->integer("Hanches");
            $table->integer("Cuisse");
            $table->integer("Pantalon");
            $table->unsignedBigInteger("IdClient");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mesures');
    }
};
