<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPossederTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posseder', function (Blueprint $table) {
            $table->foreign(['PRA_NUM'], 'posseder_ibfk_1')->references(['PRA_NUM'])->on('praticien');
            $table->foreign(['SPE_CODE'], 'posseder_ibfk_2')->references(['SPE_CODE'])->on('specialite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posseder', function (Blueprint $table) {
            $table->dropForeign('posseder_ibfk_1');
            $table->dropForeign('posseder_ibfk_2');
        });
    }
}
