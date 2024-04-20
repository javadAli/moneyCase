<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\Models\User;
use Illuminate\Support\Str;
use \App\Models\Days;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_of_comments_exists()
    {
        $user = (new User())->factory()->create();
        $response=$this->actingAs($user)->get("/dayComments/");
        $response->assertStatus(200);
    }
    public function test_the_user_can_store_new_comment_in_days_of_book_month(){
        $user=(new User())->factory()->create();
        $day=(new Days())->factory()->create();
        $response=$this->actingAs($user)->post("/dayComments",[
            "comment"=>Str::random(20),
            "SnDay"=>$day->daySn
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()["comment"]));
    }
}
