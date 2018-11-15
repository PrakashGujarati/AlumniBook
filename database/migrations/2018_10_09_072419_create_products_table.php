<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id');
            $table->string('product_name',100);
            $table->longText('images');
            $table->longText('description');
            $table->string('url');
            $table->bigInteger('original_price');
            $table->integer('discount_per');
            $table->bigInteger('best_price');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('status',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
