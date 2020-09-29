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
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->Increments('prod_id');
            $table->string('prod_name');
            $table->integer('prod_price');
            $table->string('prod_image');
            $table->string('prod_status');
            $table->text('prod_description');
            $table->string('prod_featured');
            $table->integer('prod_discount');
            $table->unsignedInteger('prod_cate');
            $table->foreign('prod_cate')
                  ->references('cate_id')
                  ->on('tbl_categories')
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
        Schema::dropIfExists('tbl_products');
    }
}
