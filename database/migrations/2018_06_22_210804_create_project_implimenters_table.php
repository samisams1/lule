<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectImplimentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_implimenters', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects');

             $table->integer('impliment_partiner_id')->unsigned()->index();
            $table->foreign('impliment_partiner_id')->references('id')->on('impliment_partiners');
            $table->string('description'); 
             $table->string('created_by');
             $table->string('updated_by');
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
        Schema::dropIfExists('project_implimenters');
    }
}
