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
            $table->bigIncrements('id_product');
            $table->unsignedBigInteger('id_category_in_product');
            $table->foreign('id_category_in_product')->references('id_category')->on('categories');
            $table->string('name_vi_product');
            $table->string('name_en_product');
            $table->double('price_product');
            $table->integer('percent_discount_product');
            $table->string('code_product');
            $table->string('status_product');
            $table->integer('quantity_product');
            $table->text('short_description_product');
            $table->longText('long_description_product');
            $table->string('image_product');
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
