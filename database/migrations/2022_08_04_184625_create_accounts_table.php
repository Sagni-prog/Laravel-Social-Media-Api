<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('friend_id');
            $table->string('email')->nullable();
            $table->Integer('phone_no')->nullable();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('password');
            $table->Integer('verification_pin');
            $table->Integer('reset_pin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
