<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPraticienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('praticien', function (Blueprint $table) {
            $table->foreign(['TYP_CODE'], 'praticien_ibfk_1')->references(['TYP_CODE'])->on('type_praticien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('praticien', function (Blueprint $table) {
            $table->dropForeign('praticien_ibfk_1');
        });
    }
}
