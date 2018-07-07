<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubActivityProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_activity_progresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_activity_id')->unsigned()->index();
            $table->foreign('sub_activity_id')->references('id')->on('sub_activity_lists');

            $table->integer('kebele_id')->unsigned()->index();
            $table->foreign('kebele_id')->references('id')->on('kebeles');
            $table->string('plan');
            $table->string('actual');
            $table->string('start_date');
            $table->string('ende_date');
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
        Schema::dropIfExists('sub_activity_progresses');
    }
}
