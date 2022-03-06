<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMedicamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicament', function (Blueprint $table) {
            $table->foreign(['FAM_CODE'], 'medicament_ibfk_1')->references(['FAM_CODE'])->on('famille');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicament', function (Blueprint $table) {
            $table->dropForeign('medicament_ibfk_1');
        });
    }
}
