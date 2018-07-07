<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('input_type_id')->unsigned()->index();
            $table->foreign('input_type_id')->references('id')->on('input_types');
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
        Schema::dropIfExists('input_lists');
    }
}
