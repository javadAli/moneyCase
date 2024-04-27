<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\Models\User;
use Illuminate\Support\Str;
use \App\Models\Days;
use \App\Models\Comments;

class CommentTest extends TestCase
{
    use RefreshDatabase;
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
            "days_daySn"=>$day->daySn
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()["comment"]));
    }

    public function test_the_user_can_update_the_comments_in_days_of_book_month(){
        $user=(new User())->factory()->create();
        $day=(new Days())->factory()->create();
        $comment=(new Comments())->factory()->create();
        $response=$this->actingAs($user)->put("/dayComments/".$comment->DayCommentSn,[
            "comment"=>Str::random(20),
            "days_daySn"=>$day->daySn
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["comment"]);
    }
    public function test_the_user_can_delete_the_comment(){
        $user=(new User())->factory()->create();
        $comment=(new Comments())->factory()->create();
        $response=$this->actingAs($user)->delete("/dayComments/".$comment->DayCommentSn);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["comment"]);
    }
    public function test_the_user_can_get_the_comment_by_id(){
        $user=(new User())->factory()->create();
        $comment=(new Comments())->factory()->create();
        $response=$this->actingAs($user)->get("/dayComments/".$comment->DayCommentSn."/edit");
        $this->assertGreaterThan(0,count($response->json()["comments"]));
    }
}
