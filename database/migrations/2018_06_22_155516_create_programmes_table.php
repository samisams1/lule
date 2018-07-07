<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('program_category_id')->unsigned()->index();
            $table->foreign('program_category_id')->references('id')->on('program_categories');
            
            $table->string('description');
            $table->string('goal');
            $table->string('objective_log_term');
            $table->string('specific_objective');
            $table->decimal('budget');
            $table->year('starting_year');
            $table->year('ending_year');
            $table->string('status');
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
        Schema::dropIfExists('programmes');
    }
}
