<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypePraticienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_praticien', function (Blueprint $table) {
            $table->string('TYP_CODE', 2)->primary();
            $table->string('TYP_LIBELLE', 22)->nullable();
            $table->string('TYP_LIEU', 19)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_praticien');
    }
}
