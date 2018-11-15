<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelancingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id');
            $table->integer('job_category_id');
            $table->string('job_title',100);
            $table->bigInteger('eligiblility_details');
            $table->float('work_cost');
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
        Schema::dropIfExists('freelancings');
    }
}
