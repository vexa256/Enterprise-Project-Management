<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_resolutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ProjectID');
            $table->string('ProjectName');
            $table->string('EventName');
            $table->string('InitiativeID');
            $table->string('EventID');
            $table->string('ResolutionID')->unique();
            $table->string('ResolutionTitle');
            $table->text('ResolutionDescription');
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
        Schema::dropIfExists('event_resolutions');
    }
}
