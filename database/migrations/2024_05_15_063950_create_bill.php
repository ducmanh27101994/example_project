<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product')->nullable();
            $table->unsignedBigInteger('color_product')->nullable();
            $table->string('price_product')->nullable();
            $table->string('chu_so_huu')->nullable();
            $table->string('billingLastName')->nullable();
            $table->string('billingCompanyName')->nullable();
            $table->string('identifyId')->nullable();
            $table->string('taxCode')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('employee')->nullable();
            $table->unsignedBigInteger('storeList')->nullable();
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
        Schema::dropIfExists('bill');
    }
}
