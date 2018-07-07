<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubOutputListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_output_lists', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name');
             $table->integer('output_list_id')->unsigned()->index();
             $table->foreign('output_list_id')->references('id')->on('output_lists');

              $table->integer('subout_come_list_id')->unsigned()->index();
             $table->foreign('subout_come_list_id')->references('id')->on('subout_come_lists');
             $table->Year('year');
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
        Schema::dropIfExists('sub_output_lists');
    }
}
