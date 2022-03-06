<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteur', function (Blueprint $table) {
            $table->string('VIS_MATRICULE', 4)->primary();
            $table->string('VIS_NOM', 15)->nullable();
            $table->string('Vis_PRENOM', 12)->nullable();
            $table->string('VIS_ADRESSE', 31)->nullable();
            $table->string('VIS_CP', 5)->nullable();
            $table->string('VIS_VILLE', 19)->nullable();
            $table->string('VIS_DATEEMBAUCHE', 19)->nullable();
            $table->string('SEC_CODE', 1)->nullable()->index('SEC_CODE');
            $table->string('LAB_CODE', 2)->nullable()->index('LAB_CODE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteur');
    }
}
