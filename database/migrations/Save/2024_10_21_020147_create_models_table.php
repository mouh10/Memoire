<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->string("Nom");
            $table->string("Description");
            $table->integer("Prix");
            $table->string("Image");
            $table->unsignedBigInteger("IdCategorie");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
