<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',30);
            $table->string('middled_name',30);
            $table->string('last_name',30);
            $table->string('email',89)->unique();
            $table->string('mobile',16)->unique();
            $table->string('study_year',10);
            $table->string('obtained_degree',100);
            $table->string('further_study',100);
            $table->string('present_occupation',100);
            $table->string('current_position',100);
            $table->text('office_address');
            $table->date('birthdate');
            $table->string('gender',6);
            $table->string('marital_status',10);
            $table->text('residential_address');
            $table->string('facebook_profile',190)->unique();
            $table->string('twitter_profile',190)->unique();
            $table->text('success_role_of_college');
            $table->text('college_experience');
            $table->text('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}
