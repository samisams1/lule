<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutputListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('output_lists', function (Blueprint $table) {
             $table->increments('id');
             
             $table->integer('outcome_id')->unsigned()->index();
             $table->foreign('outcome_id')->references('id')->on('outcome_lists');

             $table->integer('output_category_id')->unsigned()->index();
             $table->foreign('output_category_id')->references('id')->on('output_categories');

             
              $table->string('name');
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
        Schema::dropIfExists('output_lists');
    }
}
