<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->timestamps();
            //
            $table->foreign('article_id')
                  ->references('id')
                  ->on('articles')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('tag_id')
                  ->references('id')
                  ->on('tags')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_tags');
    }
}