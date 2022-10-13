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
            $table->id()->autoIncrement();
            $table->string('title')->nullable(false);
            $table->string('category_id');
            $table->string('city_id');
            $table->longText('content');
            $table->float('price');
            $table->string('img')->nullable();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->boolean('published')->default(1);
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
        Schema::dropIfExists('posts');
    }
};
