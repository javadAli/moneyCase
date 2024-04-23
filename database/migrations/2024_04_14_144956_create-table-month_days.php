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
        Schema::create("bookMonths",function(Blueprint $table){
            $table->bigIncrements("BookMonthSn");
            $table->bigInteger("SnBook")->unsigned();
            $table->foreign("SnBook")->references("BookSn")->on("books")->onDelete("cascade");
            $table->string("NameMonth");
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::dropIfExists("bookMonths");
    }
};
