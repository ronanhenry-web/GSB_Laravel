<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInviterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inviter', function (Blueprint $table) {
            $table->foreign(['AC_NUM'], 'inviter_ibfk_1')->references(['AC_NUM'])->on('activite_compl');
            $table->foreign(['PRA_NUM'], 'inviter_ibfk_2')->references(['PRA_NUM'])->on('praticien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inviter', function (Blueprint $table) {
            $table->dropForeign('inviter_ibfk_1');
            $table->dropForeign('inviter_ibfk_2');
        });
    }
}
