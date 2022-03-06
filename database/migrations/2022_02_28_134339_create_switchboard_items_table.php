<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwitchboardItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('switchboard items', function (Blueprint $table) {
            $table->tinyInteger('SwitchboardID');
            $table->tinyInteger('ItemNumber');
            $table->string('ItemText', 26)->nullable();
            $table->string('Command', 1)->nullable();
            $table->string('Argument', 14)->nullable();

            $table->primary(['SwitchboardID', 'ItemNumber']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('switchboard items');
    }
}
