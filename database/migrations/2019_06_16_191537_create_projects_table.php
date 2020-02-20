<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ProjectName');
            $table->string('ProjectBudget')->nullable();
            $table->string('ProjectActualBudget')->nullable();
            $table->string('ProjectBudgetVariance')->nullable();
            $table->string('ProjectInitiative');
            $table->text('ProjectFunders');
            $table->string('ProjectFundingAmount');
            $table->string('ProjectFundingCurrency');
            $table->text('ProjectImplementingCountries');
            $table->string('ProjectStatus');
            $table->string('ProjectStartTime');
            $table->string('ProjectEndTime');
            $table->string('ProjectDuration');
            $table->string('InitiativeID')->nullable();
            $table->text('ProjectDescription');
            $table->string('ProjectID');
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
        Schema::dropIfExists('projects');
    }
}
