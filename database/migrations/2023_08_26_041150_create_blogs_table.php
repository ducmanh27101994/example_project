<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('news_headlines')->nullable();
            $table->string('describe')->nullable();
            $table->string('detail')->nullable();
            $table->string('representative_image')->nullable();
            $table->string('status')->nullable();
            $table->string('page_title_tag')->nullable();
            $table->string('path')->nullable();
            $table->string('keyword_tags')->nullable();
            $table->string('description_card')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
