<?php

use App\Models\Client;
use App\Models\Materiel;
use App\Models\Technicien;
use App\Models\TypeIntervention;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->string('Intitule_rap',255);
            $table->dateTime('DateH_rap');
            $table->date('Date_rap');
            $table->string('Nom_Int_rap');
            $table->integer('QuantiteMat_rap');
            $table->integer('NombreInt_rap');
            $table->string('Constat_rap', 500);
            $table->string('Solution_rap', 500);
            $table->string('Observations_rap', 500);
            $table->boolean('a_facturer_rap');
            $table->foreignId(Client::class);
            $table->foreignId(TypeIntervention::class);
            $table->foreignId(Materiel::class);
            $table->foreignId(Technicien::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapports');
    }
}
