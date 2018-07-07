<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuboutComeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subout_come_lists', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->integer('outcome_list_id')->unsigned()->index();
             $table->foreign('outcome_list_id')->references('id')->on('outcome_lists');
             $table->string('description');
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
        Schema::dropIfExists('subout_come_lists');
    }
}
