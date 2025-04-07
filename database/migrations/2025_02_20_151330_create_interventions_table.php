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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_')
            $table->text('Title');
            $table->longText('Description');
            $table->enum('statut', ['En cours', 'En attendant', 'Termine']);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->foreignId('incident_id');
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
