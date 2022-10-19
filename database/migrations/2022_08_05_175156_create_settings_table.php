<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_id');
            $table->string('night_mode');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
