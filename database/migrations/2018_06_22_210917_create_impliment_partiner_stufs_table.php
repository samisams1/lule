<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImplimentPartinerStufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impliment_partiner_stufs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('impliment_partiner_id')->unsigned()->index();
            $table->foreign('impliment_partiner_id')->references('id')->on('impliment_partiners');
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
        Schema::dropIfExists('impliment_partiner_stufs');
    }
}
