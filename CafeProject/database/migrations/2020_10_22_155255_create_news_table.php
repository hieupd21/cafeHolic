<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id_news');
            $table->unsignedBigInteger('id_category_in_news');
            $table->foreign('id_category_in_news')->references('id_category_news')->on('category_news');
            $table->unsignedBigInteger('id_user_in_news');
            $table->foreign('id_user_in_news')->references('id_user')->on('users');
            $table->string('title_vi_news');
            $table->string('title_en_news');
            $table->text('short_description_news');
            $table->longText('content_news');
            $table->string('image_news');
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
        Schema::dropIfExists('news');
    }
}
