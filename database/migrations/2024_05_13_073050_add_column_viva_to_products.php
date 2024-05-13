<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVivaToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //Viva
            $table->string('viva_slogan')->nullable();
            $table->string('viva_images_banner1')->nullable();
            $table->string('viva_images_banner2')->nullable();

            $table->string('viva_images_banner3')->nullable();
            $table->string('viva_youtube_banner3')->nullable();

            $table->string('viva_images_banner4')->nullable();
            $table->string('viva_title_banner4')->nullable();
            $table->string('viva_desc_banner4')->nullable();

            $table->string('viva_images_banner5')->nullable();
            $table->string('viva_title_banner5')->nullable();
            $table->string('viva_desc_banner5')->nullable();

            $table->string('viva_images_banner6')->nullable();
            $table->string('viva_title_banner6')->nullable();
            $table->string('viva_desc_banner6')->nullable();

            $table->string('viva_title_banner7')->nullable();
            $table->string('viva_desc_banner7')->nullable();

            //NISPA
            $table->string('nispa_images_banner1')->nullable();

            $table->string('nispa_youtube_banner2')->nullable();
            $table->string('nispa_images_banner2')->nullable();

            $table->string('nispa_desc_3')->nullable();

            $table->string('nispa_images_4')->nullable();
            $table->string('nispa_desc_4')->nullable();

            $table->string('nispa_title_4')->nullable();
            $table->string('nispa_desc_5')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
