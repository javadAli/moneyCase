<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Worker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MonthDays>
 */
class MonthDaysFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $worker=(new Worker())->factory()->create();
        return [
            "worker_workerId"=>$worker->workerId
            ,"monthName"=>fake()->monthName()
            ,"day1"=>'00'
            ,"day2"=>'00'
            ,"day3"=>'00'
            ,"day4"=>'00'
            ,"day5"=>'00'
            ,"day6"=>'00'
            ,"day7"=>'00'
            ,"day8"=>'00'
            ,"day9"=>'00'
            ,"day10"=>'00'
            ,"day11"=>'00'
            ,"day12"=>'00'
            ,"day13"=>'00'
            ,"day14"=>'00'
            ,"day15"=>'00'
            ,"day16"=>'00'
            ,"day17"=>'00'
            ,"day18"=>'00'
            ,"day19"=>'00'
            ,"day20"=>'00'
            ,"day21"=>'00'
            ,"day22"=>'00'
            ,"day23"=>'00'
            ,"day24"=>'00'
            ,"day25"=>'00'
            ,"day26"=>'00'
            ,"day27"=>'00'
            ,"day28"=>'00'
            ,"day29"=>'00'
            ,"day30"=>'00'
            ,"day31"=>'00'
        ];
    }
}
