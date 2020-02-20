<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowerResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_resolutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PowerStructureID');
            $table->string('PowerStructureName');
            $table->string('ResolutionID');
            $table->string('ResolutionTitle');
            $table->text('ResolutionDescription');
            $table->string('ResolutionStatus');
            $table->text('ResolutionImplementationStatus');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('power_resolutions');
    }
}
