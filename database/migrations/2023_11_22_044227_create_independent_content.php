<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndependentContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('independent_content', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('status')->nullable();
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->longText('detail')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('independent_content');
    }
}
