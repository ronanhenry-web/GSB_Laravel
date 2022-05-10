<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labo', function (Blueprint $table) {
            $table->string('LAB_CODE', 2)->primary();
            $table->string('LAB_NOM', 10)->nullable();
            $table->string('LAB_CHEFVENTE', 17)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labo');
    }
}
