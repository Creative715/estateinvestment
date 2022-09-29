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
            $table->string('title');
            $table->string('category_id');
            $table->string('city_id');
            $table->string('seo_title')->nullable();
            $table->longText('content');
            $table->string('carousel')->nullable();
            $table->float('price');
            $table->string('img')->nullable();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('seo_description')->nullable();
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
