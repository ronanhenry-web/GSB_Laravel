<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRapportVisiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rapport_visite', function (Blueprint $table) {
            $table->foreign(['VIS_MATRICULE'], 'rapport_visite_ibfk_1')->references(['VIS_MATRICULE'])->on('visiteur');
            $table->foreign(['PRA_NUM'], 'rapport_visite_ibfk_2')->references(['PRA_NUM'])->on('praticien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rapport_visite', function (Blueprint $table) {
            $table->dropForeign('rapport_visite_ibfk_1');
            $table->dropForeign('rapport_visite_ibfk_2');
        });
    }
}
