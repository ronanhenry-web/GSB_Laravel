<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossederTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posseder', function (Blueprint $table) {
            $table->tinyInteger('PRA_NUM');
            $table->string('SPE_CODE', 3)->index('SPE_CODE');
            $table->string('POS_DIPLOME')->nullable();
            $table->string('POS_COEFPRESCRIPTION')->nullable();

            $table->primary(['PRA_NUM', 'SPE_CODE']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posseder');
    }
}
