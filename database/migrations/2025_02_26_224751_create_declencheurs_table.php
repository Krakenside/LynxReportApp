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
        Schema::create('declencheurs', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('description');
            $table->dateTime('dateHeure');
            $table->enum('type', ["Incident", "Installation", "Signalement_Dysfonctionement"])->nullable(false);
            $table->text('interlocuteur')->nullable();
            $table->text('numInter')->nullable();
            $table->foreignId('site_id')->nullable()->constrained('sites');
            $table->mediumText('systeme_concerné');
            $table->enum('etat_syst', ['En panne', 'Defectueux', 'Hors service', 'Fonctionnel'])->nullable(false);
            $table->foreignId('client_id')->nullable(true)->constrained('clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declencheurs');
    }
};
