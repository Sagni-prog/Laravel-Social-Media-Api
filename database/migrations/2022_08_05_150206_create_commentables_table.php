<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commentables', function (Blueprint $table) {
            $table->Integer('comment_id');
            $table->bigInteger('commentable_id');
            $table->string('commentable_type');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('commentables');
    }
};
