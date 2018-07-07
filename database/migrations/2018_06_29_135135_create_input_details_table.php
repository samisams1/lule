<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_details', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('input_sub_list_id')->unsigned()->index();
             $table->foreign('input_sub_list_id')->references('id')->on('input_sub_lists');
             $table->string('key');
             $table->string('value');

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
        Schema::dropIfExists('input_details');
    }
}
