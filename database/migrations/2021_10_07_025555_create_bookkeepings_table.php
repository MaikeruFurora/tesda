<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookkeepingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookkeepings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('b1')->default(false);
            $table->boolean('b2')->default(false);
            $table->boolean('b3')->default(false);
            $table->boolean('b4')->default(false);
            $table->boolean('b5')->default(false);
            $table->boolean('b6')->default(false);
            $table->boolean('b7')->default(false);
            $table->boolean('b8')->default(false);
            $table->boolean('b9')->default(false);
            $table->boolean('b10')->default(false);
            $table->boolean('b11')->default(false);
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
        Schema::dropIfExists('bookkeepings');
    }
}
