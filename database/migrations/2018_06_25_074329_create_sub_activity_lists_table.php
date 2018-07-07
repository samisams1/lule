<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubActivityListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_activity_lists', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->string('description');
             $table->integer('activity_list_id')->unsigned()->index();
             $table->foreign('activity_list_id')->references('id')->on('activity_lists');

             $table->integer('sub_output_list_id')->unsigned()->index();
             $table->foreign('sub_output_list_id')->references('id')->on('sub_output_lists');

             $table->integer('kebele_id')->unsigned()->index();
             $table->foreign('kebele_id')->references('id')->on('kebeles');

             $table->date('start');
             $table->date("end");

             $table->string('plan');
             $table->string("actual");

             $table->decimal('plan_budget');
             $table->decimal("actual_budget");

             
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
        Schema::dropIfExists('sub_activity_lists');
    }
}
