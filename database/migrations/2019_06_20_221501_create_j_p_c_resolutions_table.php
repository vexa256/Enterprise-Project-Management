<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJPCResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('j_p_c_resolutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('JPCName');
            $table->string('JPCID');
            $table->string('ResolutionID');
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
        Schema::dropIfExists('j_p_c_resolutions');
    }
}
