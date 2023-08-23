<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('full_name')->nullable();
            $table->string('status')->nullable();
            //1 - root, 2 - employee, 3 - customer
            $table->integer('type')->comment('Phân loại user')->nullable();
            $table->string('updated_by')->nullable();
            $table->longText('token_web')->nullable();
            $table->longText('agent')->nullable();
            $table->string('ip_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
