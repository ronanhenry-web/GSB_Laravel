<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVisiteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visiteur', function (Blueprint $table) {
            $table->foreign(['SEC_CODE'], 'visiteur_ibfk_1')->references(['SEC_CODE'])->on('secteur');
            $table->foreign(['LAB_CODE'], 'visiteur_ibfk_2')->references(['LAB_CODE'])->on('labo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visiteur', function (Blueprint $table) {
            $table->dropForeign('visiteur_ibfk_1');
            $table->dropForeign('visiteur_ibfk_2');
        });
    }
}
