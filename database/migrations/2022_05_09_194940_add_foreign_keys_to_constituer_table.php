<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConstituerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('constituer', function (Blueprint $table) {
            $table->foreign(['MED_DEPOTLEGAL'], 'constituer_ibfk_1')->references(['MED_DEPOTLEGAL'])->on('medicament');
            $table->foreign(['CMP_CODE'], 'constituer_ibfk_2')->references(['CMP_CODE'])->on('composant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('constituer', function (Blueprint $table) {
            $table->dropForeign('constituer_ibfk_1');
            $table->dropForeign('constituer_ibfk_2');
        });
    }
}
