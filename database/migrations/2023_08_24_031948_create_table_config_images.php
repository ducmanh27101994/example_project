<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableConfigImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_config_images', function (Blueprint $table) {
            $table->id();
            $table->string('banner_images')->nullable();
            $table->string('image_icon_right')->nullable();
            $table->string('favicon_image')->nullable();
            $table->string('footer_content')->nullable();
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
        Schema::dropIfExists('table_config_images');
    }
}
