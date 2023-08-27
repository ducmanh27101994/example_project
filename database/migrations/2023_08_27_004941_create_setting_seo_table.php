<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_seo', function (Blueprint $table) {
            $table->id();
            $table->longText('website_title_tag')->nullable();
            $table->longText('keyword_tags')->nullable();
            $table->longText('description_card')->nullable();
            $table->longText('contents_of_the_robots')->nullable();
            $table->longText('contents_of_the_sitemap')->nullable();
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
        Schema::dropIfExists('setting_seo');
    }
}
