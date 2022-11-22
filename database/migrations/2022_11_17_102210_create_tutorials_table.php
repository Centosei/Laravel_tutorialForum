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
        Schema::create('tutorials', function (Blueprint $table) {
	    $table->id();
	    $table->foreignId('user_id')->constrained();
	    $table->foreignId('category_id')->constrained();
	    $table->string('title');
	    $table->text('content');
	    $table->dateTime('created_at')->useCurrent();
	    $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
	    $table->integer('count_read')->nullable();
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::dropIfExists('tutorials');
    }
};
