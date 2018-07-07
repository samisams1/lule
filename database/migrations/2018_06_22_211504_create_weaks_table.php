<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('month_id')->unsigned()->index();
            $table->foreign('month_id')->references('id')->on('months');
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
        Schema::dropIfExists('weaks');
    }
}
