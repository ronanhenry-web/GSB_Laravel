<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicament', function (Blueprint $table) {
            $table->string('MED_DEPOTLEGAL', 9)->primary();
            $table->string('MED_NOMCOMMERCIAL', 19)->nullable();
            $table->string('FAM_CODE', 3)->nullable()->index('FAM_CODE');
            $table->string('MED_COMPOSITION', 80)->nullable();
            $table->string('MED_EFFETS', 194)->nullable();
            $table->string('MED_CONTREINDIC', 236)->nullable();
            $table->string('MED_PRIXECHANTILLON', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicament');
    }
}
