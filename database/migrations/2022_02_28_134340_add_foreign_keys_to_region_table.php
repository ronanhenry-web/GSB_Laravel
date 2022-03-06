<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('region', function (Blueprint $table) {
            $table->foreign(['SEC_CODE'], 'region_ibfk_1')->references(['SEC_CODE'])->on('secteur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('region', function (Blueprint $table) {
            $table->dropForeign('region_ibfk_1');
        });
    }
}
