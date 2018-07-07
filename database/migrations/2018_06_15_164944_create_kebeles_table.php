<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKebelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebeles', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->integer('wereda_id')->unsigned()->index();
             $table->foreign('wereda_id')->references('id')->on('weredas');
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
        Schema::dropIfExists('kebeles');
    }
}
