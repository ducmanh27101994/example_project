<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table->string('title_store')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('desc')->nullable();
            $table->string('image_store')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->nullable();
            $table->string('page_title_tag')->nullable();
            $table->string('path')->nullable();
            $table->longText('keyword_tags')->nullable();
            $table->longText('description_card')->nullable();
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
        Schema::dropIfExists('store');
    }
}
