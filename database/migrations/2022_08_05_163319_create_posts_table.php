<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('account_id');
            $table->string('post_title')->nullable();
            $table->string('post_body')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
