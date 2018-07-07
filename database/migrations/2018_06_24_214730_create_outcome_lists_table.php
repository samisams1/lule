<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutcomeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outcome_lists', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->integer('outcome_category_id')->unsigned()->index();
             $table->foreign('outcome_category_id')->references('id')->on('outcome_categories');
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
        Schema::dropIfExists('outcome_lists');
    }
}
