<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituer', function (Blueprint $table) {
            $table->string('MED_DEPOTLEGAL', 9);
            $table->string('CMP_CODE')->index('CMP_CODE');
            $table->string('CST_QTE')->nullable();

            $table->primary(['MED_DEPOTLEGAL', 'CMP_CODE']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constituer');
    }
}
