<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id')->references('id')->on('alumnis');
            $table->integer('job_category_id')->references('id')->on('job_categories');
            $table->string('job_title',100);
            $table->bigInteger('eligibility_details');
            $table->bigInteger('salary_detail');
            $table->longText('job_description');
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
        Schema::dropIfExists('job_postings');
    }
}
