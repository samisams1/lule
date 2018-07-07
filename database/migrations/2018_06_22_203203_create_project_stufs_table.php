<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectStufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_stufs', function (Blueprint $table) {
            $table->increments('id');
             $table->String('first_name');
             $table->String('midel_name');
             $table->String('last_name');

             $table->integer('impliment_partiner_id')->unsigned()->index();
             $table->foreign('impliment_partiner_id')->references('id')->on('impliment_partiners');

              $table->integer('kebele_id')->unsigned()->index();
             $table->foreign('kebele_id')->references('id')->on('kebeles');
             $table->String('status');

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
        Schema::dropIfExists('project_stufs');
    }
}
