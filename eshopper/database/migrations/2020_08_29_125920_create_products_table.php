<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('prod_id');
            $table->string('prod_name');
            $table->float('prod_price');
            $table->string('prod_image');
            $table->string('prod_status');
            $table->longText('prod_description');
            $table->string('prod_featured');
            $table->integer('prod_discount');
            $table->unsignedBigInteger('prod_cate');
            $table->foreign('prod_cate')
                  ->references('cate_id')
                  ->on('categories')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
