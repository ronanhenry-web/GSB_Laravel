<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPrescrireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prescrire', function (Blueprint $table) {
            $table->foreign(['MED_DEPOTLEGAL'], 'prescrire_ibfk_1')->references(['MED_DEPOTLEGAL'])->on('medicament');
            $table->foreign(['DOS_CODE'], 'prescrire_ibfk_3')->references(['DOS_CODE'])->on('dosage');
            $table->foreign(['TIN_CODE'], 'prescrire_ibfk_2')->references(['TIN_CODE'])->on('type_individu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prescrire', function (Blueprint $table) {
            $table->dropForeign('prescrire_ibfk_1');
            $table->dropForeign('prescrire_ibfk_3');
            $table->dropForeign('prescrire_ibfk_2');
        });
    }
}
