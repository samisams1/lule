<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputSubListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_sub_lists', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('input_list_id')->unsigned()->index();
             $table->foreign('input_list_id')->references('id')->on('input_lists');
             $table->string('name');
             $table->string('beneficiary_type');

             $table->integer('beneficiary_id')->unsigned()->index();
             $table->foreign('beneficiary_id')->references('id')->on('beneficiary_profiles');

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
        Schema::dropIfExists('input_sub_lists');
    }
}
