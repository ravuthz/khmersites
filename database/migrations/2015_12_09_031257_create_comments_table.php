<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {
    public function up() {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->text('text');
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('comments');
        DB::statement('SET foreign_key_checks = 1');
    }
}
