<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportVisiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapport_visite', function (Blueprint $table) {
            $table->string('VIS_MATRICULE', 4)->index('VIS_MATRICULE');
            $table->tinyInteger('RAP_NUM')->primary();
            $table->tinyInteger('PRA_NUM')->nullable()->index('PRA_NUM');
            $table->string('RAP_DATE', 19)->nullable();
            $table->string('RAP_BILAN', 90)->nullable();
            $table->string('RAP_MOTIF', 22)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapport_visite');
    }
}
