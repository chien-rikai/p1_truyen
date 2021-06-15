<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignInPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id')->after('id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('books_id')->after('id');
            $table->foreign('books_id')->references('id')->on('books');
            $table->unsignedBigInteger('categorys_id')->after('id');
            $table->foreign('categorys_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
