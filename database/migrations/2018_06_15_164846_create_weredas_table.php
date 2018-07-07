<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeredasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weredas', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name');
             $table->integer('zone_id')->unsigned()->index();
             $table->foreign('zone_id')->references('id')->on('zones');
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
        Schema::dropIfExists('weredas');
    }
}
