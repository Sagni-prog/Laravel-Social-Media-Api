<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_id');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->Integer('user_ip_address')->nullable();
            $table->Integer('user_mac_address')->nullable();
            $table->Integer('user_longitude')->nullable();
            $table->Integer('user_latitude')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
