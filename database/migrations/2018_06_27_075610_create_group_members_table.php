<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_beneficiarie_id')->unsigned()->index();
            $table->foreign('group_beneficiarie_id')->references('id')->on('group_beneficiaries');
            $table->integer('beneficiary_profile_id')->unsigned()->index();
            $table->foreign('beneficiary_profile_id')->references('id')->on('beneficiary_profiles');
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
        Schema::dropIfExists('group_members');
    }
}
