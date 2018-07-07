<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_lists', function (Blueprint $table) {
           $table->increments('id');
             $table->string('name');
             $table->integer('activity_category_id')->unsigned()->index();
             $table->foreign('activity_category_id')->references('id')->on('activity_categories');
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
        Schema::dropIfExists('activity_lists');
    }
}
