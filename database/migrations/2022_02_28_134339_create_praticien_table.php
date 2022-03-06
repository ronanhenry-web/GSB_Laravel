<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraticienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praticien', function (Blueprint $table) {
            $table->tinyInteger('PRA_NUM')->primary();
            $table->string('PRA_NOM', 16)->nullable();
            $table->string('PRA_PRENOM', 15)->nullable();
            $table->string('PRA_ADRESSE', 29)->nullable();
            $table->mediumInteger('PRA_CP')->nullable();
            $table->string('PRA_VILLE', 19)->nullable();
            $table->decimal('PRA_COEFNOTORIETE', 5)->nullable();
            $table->string('TYP_CODE', 2)->nullable()->index('TYP_CODE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praticien');
    }
}
