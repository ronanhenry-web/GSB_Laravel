<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFormulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formuler', function (Blueprint $table) {
            $table->foreign(['MED_DEPOTLEGAL'], 'formuler_ibfk_1')->references(['MED_DEPOTLEGAL'])->on('medicament');
            $table->foreign(['PRE_CODE'], 'formuler_ibfk_2')->references(['PRE_CODE'])->on('presentation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formuler', function (Blueprint $table) {
            $table->dropForeign('formuler_ibfk_1');
            $table->dropForeign('formuler_ibfk_2');
        });
    }
}
