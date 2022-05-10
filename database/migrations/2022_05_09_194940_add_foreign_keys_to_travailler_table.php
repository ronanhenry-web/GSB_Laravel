<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTravaillerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travailler', function (Blueprint $table) {
            $table->foreign(['VIS_MATRICULE'], 'travailler_ibfk_1')->references(['VIS_MATRICULE'])->on('visiteur');
            $table->foreign(['REG_CODE'], 'travailler_ibfk_2')->references(['REG_CODE'])->on('region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travailler', function (Blueprint $table) {
            $table->dropForeign('travailler_ibfk_1');
            $table->dropForeign('travailler_ibfk_2');
        });
    }
}
