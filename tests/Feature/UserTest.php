<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\Models\User;
use \App\Models\Work;

class UserTest extends TestCase
{
  use RefreshDatabase;
    public function test_the_user_can_get_the_works(){
        $user=(new User())->factory()->create();
        $works=(new Work())->factory()->create();
        $response=$this->actingAs($user)->get("user/getWorks/".$works->user_id);
        $this->assertEquals(1,count($response->json()["works"]));
        $response->assertStatus(200);
    }
}
