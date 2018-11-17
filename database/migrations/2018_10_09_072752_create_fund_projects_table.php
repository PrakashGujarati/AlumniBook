<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->references('id')->on('admins');
            $table->string('project_name',100);
            $table->longText('description');
            $table->bigInteger('target_amount');
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
        Schema::dropIfExists('fund_projects');
    }
}
