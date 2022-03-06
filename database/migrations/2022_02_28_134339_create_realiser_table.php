<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealiserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realiser', function (Blueprint $table) {
            $table->string('AC_NUM');
            $table->string('VIS_MATRICULE', 4)->index('VIS_MATRICULE');
            $table->string('REA_MTTFRAIS')->nullable();

            $table->primary(['AC_NUM', 'VIS_MATRICULE']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realiser');
    }
}
