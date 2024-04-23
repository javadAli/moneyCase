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
        Schema::create('monthDays', function (Blueprint $table) {
            $table->bigIncrements("monthSn");
            $table->integer("workerSn")->unsigned();
            $table->foreign("workerSn")->references("WorkerId")->on("workers")->onDelete("cascade");
            $table->string("monthName");
            $table->enum("day1",['0','1','00','01','-1'])->default("1");
            $table->enum("day2",['0','1','00','01','-1'])->default("1");
            $table->enum("day3",['0','1','00','01','-1'])->default("1");
            $table->enum("day4",['0','1','00','01','-1'])->default("1");
            $table->enum("day5",['0','1','00','01','-1'])->default("1");
            $table->enum("day6",['0','1','00','01','-1'])->default("1");
            $table->enum("day7",['0','1','00','01','-1'])->default("1");
            $table->enum("day8",['0','1','00','01','-1'])->default("1");
            $table->enum("day9",['0','1','00','01','-1'])->default("1");
            $table->enum("day10",['0','1','00','01','-1'])->default("1");
            $table->enum("day11",['0','1','00','01','-1'])->default("1");
            $table->enum("day12",['0','1','00','01','-1'])->default("1");
            $table->enum("day13",['0','1','00','01','-1'])->default("1");
            $table->enum("day14",['0','1','00','01','-1'])->default("1");
            $table->enum("day15",['0','1','00','01','-1'])->default("1");
            $table->enum("day16",['0','1','00','01','-1'])->default("1");
            $table->enum("day17",['0','1','00','01','-1'])->default("1");
            $table->enum("day18",['0','1','00','01','-1'])->default("1");
            $table->enum("day19",['0','1','00','01','-1'])->default("1");
            $table->enum("day20",['0','1','00','01','-1'])->default("1");
            $table->enum("day21",['0','1','00','01','-1'])->default("1");
            $table->enum("day22",['0','1','00','01','-1'])->default("1");
            $table->enum("day23",['0','1','00','01','-1'])->default("1");
            $table->enum("day24",['0','1','00','01','-1'])->default("1");
            $table->enum("day25",['0','1','00','01','-1'])->default("1");
            $table->enum("day26",['0','1','00','01','-1'])->default("1");
            $table->enum("day27",['0','1','00','01','-1'])->default("1");
            $table->enum("day28",['0','1','00','01','-1'])->default("1");
            $table->enum("day29",['0','1','00','01','-1'])->default("1");
            $table->enum("day30",['0','1','00','01','-1'])->default("1");
            $table->enum("day31",['0','1','00','01','-1'])->default("1");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthDays');
    }
};
