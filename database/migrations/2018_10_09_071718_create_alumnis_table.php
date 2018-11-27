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
            $table->string('first_name',30)->nullable();
            $table->string('middled_name',30)->nullable();
            $table->string('last_name',30)->nullable();
            $table->string('email',89)->unique()->nullable();
            $table->string('password',191);
            $table->string('mobile',16)->unique()->nullable();
            $table->string('study_year',10)->nullable();
            $table->string('obtained_degree',100)->nullable();
            $table->string('further_study',100)->nullable();
            $table->string('present_occupation',100)->nullable();
            $table->string('current_position',100)->nullable();
            $table->string('current_salary',100)->nullable();
            $table->text('office_address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender',6)->nullable();
            $table->string('marital_status',10)->nullable();
            $table->text('residential_address')->nullable();
            $table->string('facebook_profile',190)->unique()->nullable();
            $table->string('twitter_profile',190)->unique()->nullable();
            $table->text('success_role_of_college')->nullable();
            $table->text('college_experience')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->text('image')->nullable();
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
