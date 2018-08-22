<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_articles', function (Blueprint $table) {
            $table->increments('id_article');
            $table->string('image_article');
            $table->string('title_article');
            $table->string('category_article');
            $table->longText('description_article');
            $table->integer('id_user');
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
        Schema::dropIfExists('add_articles');
        Schema::drop('add_articles');
    }
}
