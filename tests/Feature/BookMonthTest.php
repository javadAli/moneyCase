<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\Models\Book;
use \App\Models\User;
use \App\Models\BookMonth;
use \App\Models\Work;

class BookMonthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_index_of_bookMonth_exist()
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get('/bookMonths/');
        $response->assertStatus(200);
    }

    public function test_the_user_can_store_new_bookMonth(){
        $user=(new User())->factory()->create();
        $book=(new Book())->factory()->create();
        $response=$this->actingAs($user)->post("/bookMonths",[
             "SnBook"=>$book->BookSn
            , "NameMonth"=>fake()->monthName()
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()['bookMonth']));
    }
    public function test_the_user_can_update_the_bookMonth() {
        $user=(new User())->factory()->create();
        $book= (new Book())->factory()->create();
        $bookMonth=(new BookMonth())->factory()->create();
        $response=$this->actingAs($user)->put("/bookMonths/".$bookMonth->BookMonthSn,[
            "SnBook"=>$book->BookSn
            , "NameMonth"=>fake()->monthName()
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["bookMonth"]);
    }

    public function test_the_user_can_delete_the_bookMonth(){
        $user=(new User())->factory()->create();
        $bookMonth=(new BookMonth())->factory()->create();
        $response=$this->actingAs($user)->delete("/bookMonths/".$bookMonth->BookMonthSn);
        $response->assertStatus(200);
        $this->assertEquals(1,$response->json()["bookMonth"]);
    }
}
