<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\Models\User;
use \App\Models\Work;
use \App\Models\Worker;
use \App\Models\MonthDays;

class MonthDaysTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_index_method_of_monthDays_exists_and_works()
    {
        $user=(new User())->factory()->create();
        $response=$this->actingAs($user)->get("/monthDays/");
        $response->assertStatus(200);
    }
    public function test_the_user_can_store_new_mothDays(){

        $user=(new User())->factory()->create();
        $work=(new Work)->factory()->create();
        $worker=(new Worker())->factory()->create();
        $response=$this->actingAs($user)->post("/monthDays",[
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
             ,"day31"=>'00']);
        $response->assertStatus(200);
        $this->greaterThan(0,count($response->json()['monthDay']));
    }

    public function test_the_user_update_the_monthDays() {
        $user=(new User())->factory()->create();
        $worker=(new Worker())->factory()->create();
        $monthDays=(new MonthDays())->factory()->create();
        $response=$this->actingAs($user)->put("/monthDays/".$monthDays->monthSn,[
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
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["monthDay"]);
    }
    public function test_the_user_can_delete_the_monthDays(){
        $user=(new User())->factory()->create();
        $monthDay=(new MonthDays())->factory()->create();
        $response=$this->actingAs($user)->delete("/monthDays/".$monthDay->monthSn);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["monthDays"]);
    }
    public function test_the_user_can_get_the_monthdays_by_its_id(){
        $user=(new User())->factory()->create();
        $monthDay=(new MonthDays())->factory()->create();
        $response=$this->actingAs($user)->get("/monthDays/".$monthDay->monthSn."/edit");
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()["monthDay"]));
    }

}
