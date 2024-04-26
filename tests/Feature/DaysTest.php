<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \App\Models\User;
use Tests\TestCase;
use \App\Models\BookMonth;
use \App\Models\Days;

class DaysTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_method_index_in_monthDays_exists()
    {
        $user=(new User())->factory()->create();
        $response=$this->actingAs($user)->get("/workDays");
        $response->assertStatus(200);
    }

    public function test_the_user_can_store_new_day_in_bookMonths(){
        $user=(new User())->factory()->create();
        $bookMonth=(new BookMonth())->factory()->create();
        $response=$this->actingAs($user)->post("/workDays",
        [
              "dayName"=>1
            , "InAmount"=>0
            , "OutAmount"=>0
            , "bookmonths_bookMonthSn"=>$bookMonth->BookMonthSn
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()["day"]));
    }
    public function test_the_user_can_update_the_Days(){
        $user=(new User())->factory()->create();
        $bookMonth=(new BookMonth())->factory()->create();
        $day=(new Days())->factory()->create();
        $response=$this->actingAs($user)->put("/workDays/".$day->daySn,[
            "dayName"=>1
            , "InAmount"=>0
            , "OutAmount"=>0
            , "bookmonths_bookMonthSn"=>$bookMonth->BookMonthSn
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["day"]);
    }
    public function test_the_user_can_delete_book_month_days(){
        $user=(new User())->factory()->create();
        $day=(new Days())->factory()->create();
        $response=$this->actingAs($user)->delete("/workDays/".$day->daySn);
        $response->assertStatus(200);
        $this->assertEquals(1,$response->json()["monthDay"]);
    }
}
