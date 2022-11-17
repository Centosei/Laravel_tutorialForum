<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
	    $table->id();
	    $table->unsignedBigInteger('thread_id');
	    $table->foreign('thread_id')->reference('id')->on('tutorials');
	    $table->unsignedBigInteger('user_id');
	    $table->foreign('user_id')->reference('id')->on('users');
	    $table->text('comment');
	    $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
