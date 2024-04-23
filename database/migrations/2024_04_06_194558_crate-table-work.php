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
        Schema::create('works', function (Blueprint $table) {
            $table->integerIncrements("workId");
            $table->string("workName");
            $table->string("description")->nullable();
            $table->bigInteger("userSn")->unsigned();
            $table->foreign("userSn")->references("id")->on("users");
            $table->dateTime("startDate")->nullable();
            $table->dateTime("endDate")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};
