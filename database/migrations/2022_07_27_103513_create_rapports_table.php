<?php


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
            $table->string('Intitule_rap', 255);
            $table->dateTime('DateH_rap');
            $table->date('Date_rap');
            $table->string('Nom_Int_rap');
            $table->integer('QuantiteMat_rap');
            $table->integer('NombreInt_rap');
            $table->string('Constat_rap', 500);
            $table->string('Solution_rap', 500);
            $table->string('Observations_rap', 500);
            $table->tinyInteger('a_facturer_rap');
            $table->tinyInteger('Verification');
            $table->tinyInteger('Deplacement');
            $table->tinyInteger('Installation');
            $table->tinyInteger('Configuration');
            $table->tinyInteger('Autre');
            $table->tinyInteger('Maintenance_Materielle');
            $table->tinyInteger('Maintenance_Logicielle');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('Tech_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('Tech_id')->references('id')->on('techniciens');
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
