<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->boolean('status');
            $table->smallInteger('click_count');
            $table->integer('user_id')->unsigned();
            $table->integer('page_id')->unsigned();
            $table->timestamps();
            $table->timestamp('published_at');
            //$table->timestamp('published_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('posts');
        DB::statement('SET foreign_key_checks = 1');
    }
}