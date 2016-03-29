<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {
    public function up() {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('title');
            $table->string('slug');
            $table->smallInteger('order');
            $table->boolean('status');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id')->unsigned();
            $table->smallInteger('click_count');
            $table->string('layout', 70);
            $table->timestamps();
            $table->timestamp('published_at');
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('pages');
        DB::statement('SET foreign_key_checks = 1');
    }
}
