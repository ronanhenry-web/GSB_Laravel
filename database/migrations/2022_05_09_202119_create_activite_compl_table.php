<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviteComplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_compl', function (Blueprint $table) {
            $table->string('AC_NUM')->primary();
            $table->string('AC_DATE')->nullable();
            $table->string('AC_LIEU')->nullable();
            $table->string('AC_THEME')->nullable();
            $table->string('AC_MOTIF')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activite_compl');
    }
}
