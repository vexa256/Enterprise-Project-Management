<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitiativeResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiative_resolutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('InitiativeID');
            $table->string('InitiativeEventID');
            $table->string('InitiativeResolutionID');
            $table->string('InitiativeResolutionTitle');
            $table->text('InitiativeResolutionDescription');
            $table->string('Status');
            $table->string('ImplementationStatus');
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
        Schema::dropIfExists('initiative_resolutions');
    }
}
