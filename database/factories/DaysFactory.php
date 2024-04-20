<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Days;
use \App\Models\Comments;
use \App\Models\BookMonth;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Days>
 */
class DaysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Days::class;
    public function definition()
    {
        $bookMonth=(new BookMonth())->factory()->create();
        return  [
            "dayName"=>1
            , "InAmount"=>0
            , "OutAmount"=>0
            , "SnBookMonth"=>$bookMonth->BookMonthSn
                ];
    }
}
