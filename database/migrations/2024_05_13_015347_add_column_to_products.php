<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //Hedi
            $table->text('heidi_images_banner1')->nullable();
            $table->text('heidi_images_banner2')->nullable();
            $table->text('heidi_images_banner3')->nullable();
            $table->text('heidi_images_banner4')->nullable();
            $table->text('heidi_images_banner5')->nullable();

            $table->text('heidi_images_banner6')->nullable();
            $table->text('heidi_title_banner6')->nullable();
            $table->text('heidi_desc_banner6')->nullable();

            $table->text('heidi_images_banner7')->nullable();
            $table->text('heidi_title_banner7')->nullable();
            $table->text('heidi_desc_banner7')->nullable();

            $table->text('heidi_images_banner8')->nullable();
            $table->text('heidi_title_banner8')->nullable();
            $table->text('heidi_desc_banner8')->nullable();

            $table->text('heidi_images_banner9')->nullable();
            $table->text('heidi_title_banner9')->nullable();
            $table->text('heidi_desc_banner9')->nullable();

            $table->text('heidi_images_banner10')->nullable();
            $table->text('heidi_images_banner10_1')->nullable();
            $table->text('heidi_title_banner10')->nullable();
            $table->text('heidi_desc_banner10')->nullable();

            $table->text('heidi_images_banner11')->nullable();
            $table->text('heidi_images_banner11_1')->nullable();
            $table->text('heidi_title_banner11')->nullable();
            $table->text('heidi_desc_banner11')->nullable();

            $table->text('heidi_images_banner12')->nullable();
            $table->text('heidi_images_banner12_1')->nullable();
            $table->text('heidi_title_banner12')->nullable();
            $table->text('heidi_desc_banner12')->nullable();

            $table->string('heidi_images_banner13')->nullable();

            //Gogo
            $table->text('gogo_slogan')->nullable();
            $table->text('gogo_images_banner1')->nullable();
            $table->text('gogo_desc_3')->nullable();

            $table->text('gogo_images_banner4')->nullable();
            $table->text('gogo_title_banner4')->nullable();
            $table->text('gogo_desc_banner4')->nullable();

            $table->text('gogo_images_banner5')->nullable();
            $table->text('gogo_title_banner5')->nullable();
            $table->text('gogo_desc_banner5')->nullable();

            $table->text('gogo_images_banner6')->nullable();
            $table->text('gogo_title_banner6')->nullable();
            $table->text('gogo_desc_banner6')->nullable();

            $table->text('gogo_images_banner7')->nullable();
            $table->text('gogo_title_banner7')->nullable();
            $table->text('gogo_desc_banner7')->nullable();

            $table->text('gogo_images_banner8')->nullable();
            $table->text('gogo_title_banner8')->nullable();
            $table->text('gogo_desc_banner8')->nullable();

            $table->text('gogo_images_banner9')->nullable();
            $table->text('gogo_title_banner9')->nullable();
            $table->text('gogo_desc_banner9')->nullable();

            $table->text('gogo_images_banner10')->nullable();
            $table->text('gogo_title_banner10')->nullable();
            $table->text('gogo_desc_banner10')->nullable();

            $table->text('gogo_images_banner11')->nullable();
            $table->text('gogo_title_banner11')->nullable();
            $table->text('gogo_desc_banner11')->nullable();

            $table->text('gogo_title_banner12')->nullable();
            $table->text('gogo_desc_banner12')->nullable();

            $table->text('gogo_images_banner13')->nullable();


            //Viva
            $table->text('viva_slogan')->nullable();
            $table->text('viva_images_banner1')->nullable();
            $table->text('viva_images_banner2')->nullable();

            $table->text('viva_images_banner3')->nullable();
            $table->text('viva_youtube_banner3')->nullable();

            $table->text('viva_images_banner4')->nullable();
            $table->text('viva_title_banner4')->nullable();
            $table->text('viva_desc_banner4')->nullable();

            $table->text('viva_images_banner5')->nullable();
            $table->text('viva_title_banner5')->nullable();
            $table->text('viva_desc_banner5')->nullable();

            $table->text('viva_images_banner6')->nullable();
            $table->text('viva_title_banner6')->nullable();
            $table->text('viva_desc_banner6')->nullable();

            $table->text('viva_title_banner7')->nullable();
            $table->text('viva_desc_banner7')->nullable();

            //NISPA
            $table->text('nispa_images_banner1')->nullable();

            $table->text('nispa_youtube_banner2')->nullable();
            $table->text('nispa_images_banner2')->nullable();

            $table->text('nispa_desc_3')->nullable();

            $table->text('nispa_images_4')->nullable();
            $table->text('nispa_desc_4')->nullable();

            $table->text('nispa_title_4')->nullable();
            $table->text('nispa_desc_5')->nullable();

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
