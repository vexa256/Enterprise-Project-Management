<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('EventName');
            $table->text('StakeHolders');
            $table->text('Description');
            $table->text('Resolutions');
            $table->string('Resolution_Status');
            $table->string('InitiativeID')->nullable();
            $table->string('ProjectsID')->nullable();
            $table->string('ProjectName')->nullable();
            $table->string('InitiativeName')->nullable();
            $table->string('EventID');
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
        Schema::dropIfExists('events');
    }
}
