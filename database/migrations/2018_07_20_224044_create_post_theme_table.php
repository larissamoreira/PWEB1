<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_theme', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();
            $table->integer('theme_id')->unsigned();
      
            $table->foreign('post_id')
                ->references('id')->on('posts')
                ->onDelete('cascade');

            $table->foreign('theme_id')
                ->references('id')->on('themes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_theme');
    }
}
