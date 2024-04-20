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
        Schema::create('workers', function (Blueprint $table) {
            $table->integerIncrements("WorkerId");
            $table->string("workerName");
            $table->string("description")->nullable();
            $table->integer("workSn");
            $table->foreign("workSn")->references("workId")->on("works")->onDelete("cascade");
            $table->timestamp("TimeStamp")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
};
