<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('DayComments', function (Blueprint $table) {
            $table->bigIncrements("DayCommentSn");
            $table->string("comment");
            $table->bigInteger("SnDay");
            $table->foreign("SnDay")->references("DaySn")->on("daySn")->onDelete("cascade");
        });
    }

    public function down()
    {
        Schema::dropIfExists('DayComments');
    }
};
