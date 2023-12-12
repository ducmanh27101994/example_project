<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('distance_traveled')->nullable();
            $table->string('maximum_speed')->nullable();
            $table->string('allowable_weight_to_carry')->nullable();

            $table->string('describe_input_1')->nullable();
            $table->text('describe_textarea_1')->nullable();
            $table->string('describe_input_2')->nullable();
            $table->text('describe_textarea_2')->nullable();
            $table->string('describe_input_3')->nullable();
            $table->text('describe_textarea_3')->nullable();
            $table->string('describe_input_4')->nullable();
            $table->text('describe_textarea_4')->nullable();

            $table->text('detail')->nullable();

            $table->text('overview')->nullable();
            $table->string('overview_price')->nullable();

            $table->text('engine')->nullable();
            $table->string('engine_price')->nullable();
            $table->text('chassis')->nullable();
            $table->string('chassis_price')->nullable();

            $table->string('representative_image')->nullable();
            $table->string('images360')->nullable();
            $table->string('product_code')->nullable();
            $table->integer('product_price')->nullable();
            $table->integer('price_comparison')->nullable();
            $table->integer('product_portfolio')->nullable();
            $table->string('status')->nullable();
            $table->integer('interface_type')->nullable();

            $table->string('promotional_products')->nullable();
            $table->string('selling_products')->nullable();
            $table->string('new_product')->nullable();
            $table->integer('status_product')->nullable();

            $table->string('page_title_tag')->nullable();
            $table->string('path')->nullable();
            $table->string('keyword_tags')->nullable();
            $table->string('description_card')->nullable();

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
