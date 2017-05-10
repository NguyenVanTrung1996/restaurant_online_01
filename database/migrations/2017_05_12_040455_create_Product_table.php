<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('avatar');
            $table->float('price');
            $table->string('discrible',100);
            $table->string('type');
            $table->boolean('status');
            $table->boolean('is_hot');
            $table->float('rate_point');
            $table->integer('rate_count');
            $table->integer('new');
            $table->integer('comment_count');
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
        Schema::dropIfExists('products');
    }
}
