<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_category_id')->unsigned()->index();
            $table->foreign('project_category_id')->references('id')->on('project_categories');

           //// $table->integer('project_stuf_id')->unsigned()->index();
           // $table->foreign('project_stuf_id')->references('id')->on('project_stufs');


            $table->integer('region_id')->unsigned()->index();
            $table->foreign('region_id')->references('id')->on('regions');

            $table->string('name');
            $table->string('description');
            $table->string('goal');
            $table->string('objective_long_term');
            $table->string('specific_objective');
            
              $table->integer('total_budget');
              $table->integer('total_plan'); 
              $table->date('start_date'); 
              $table->date('end_date'); 
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
        Schema::dropIfExists('projects');
    }
}
