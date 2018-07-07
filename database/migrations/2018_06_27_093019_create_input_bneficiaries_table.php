<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputBneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_bneficiaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned()->index();
            $table->foreign('group_id')->references('id')->on('group_beneficiaries');
            $table->string('input_intervation');
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
        Schema::dropIfExists('input_bneficiaries');
    }
}
