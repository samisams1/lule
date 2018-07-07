<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programm_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('programm_id')->unsigned()->index();
            $table->foreign('programm_id')->references('id')->on('Programmes');

             $table->integer('region_id')->unsigned()->index();
            $table->foreign('region_id')->references('id')->on('regions');

            $table->string('budget');
            $table->string('starting_year');
            $table->string('ending_year');
            $table->string('status');
             $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programm_details');
    }
}
