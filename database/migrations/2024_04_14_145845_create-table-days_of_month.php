<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("days",function(Blueprint $table){
            $table->bigIncrements("daySn");
            $table->string("dayName");
            $table->bigInteger("InAmount");
            $table->bigInteger("OutAmount");
            $table->bigInteger("SnBookMonth");
            $table->foreign("SnBookMonth")->references("BookMonthSn")->on("bookMonths")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("days");
    }
};
