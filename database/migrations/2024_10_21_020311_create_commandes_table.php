<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string("Numero");
            $table->string("Tissue");
            $table->date("DateCommande");
            $table->date("DateLivraison");
            $table->string("Etat");
            $table->integer("Montant");
            $table->integer("Quantite");
            $table->boolean("Livrer")->default(false);
            $table->unsignedBigInteger("IdClient");
            $table->unsignedBigInteger("IdModel");
            $table->unsignedBigInteger("IdEmployer")->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
