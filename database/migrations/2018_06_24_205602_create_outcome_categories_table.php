<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutcomeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outcome_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
             $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('outcome_categories');
    }
}
