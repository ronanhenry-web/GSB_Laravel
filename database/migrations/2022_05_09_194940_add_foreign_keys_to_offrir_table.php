<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOffrirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offrir', function (Blueprint $table) {
            $table->foreign(['VIS_MATRICULE'], 'offrir_ibfk_1')->references(['VIS_MATRICULE'])->on('visiteur');
            $table->foreign(['MED_DEPOTLEGAL'], 'offrir_ibfk_3')->references(['MED_DEPOTLEGAL'])->on('medicament');
            $table->foreign(['RAP_NUM'], 'offrir_ibfk_2')->references(['RAP_NUM'])->on('rapport_visite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offrir', function (Blueprint $table) {
            $table->dropForeign('offrir_ibfk_1');
            $table->dropForeign('offrir_ibfk_3');
            $table->dropForeign('offrir_ibfk_2');
        });
    }
}
