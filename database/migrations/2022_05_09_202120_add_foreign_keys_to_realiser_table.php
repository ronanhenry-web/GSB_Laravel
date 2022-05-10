<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRealiserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('realiser', function (Blueprint $table) {
            $table->foreign(['AC_NUM'], 'realiser_ibfk_1')->references(['AC_NUM'])->on('activite_compl');
            $table->foreign(['VIS_MATRICULE'], 'realiser_ibfk_2')->references(['VIS_MATRICULE'])->on('visiteur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realiser', function (Blueprint $table) {
            $table->dropForeign('realiser_ibfk_1');
            $table->dropForeign('realiser_ibfk_2');
        });
    }
}
