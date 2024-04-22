<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \App\Models\User;
use Tests\TestCase;
use \App\Models\Work;

class WorkTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_method_index_of_work_exists_and_works()
    {
        $user=(new User())->factory()->create();
        $response=$this->actingAs($user)->get("/works/");
        $response->assertStatus(200);
    }

    public function test_the_store_method_of_work_works(){
        $user=(new User())->factory()->create();
        $response=$this->actingAs($user)->post("/works",["workName"=>"workTest",
                                                        "description"=>"test test test",
                                                        "userSn"=>$user->id,
                                                        "startDate"=>now(),
                                                        "endDate"=>now()]);
        $response->assertStatus(200);
        $this->greaterThan(0,count($response->json()["work"]));
    }
    public function test_the_user_can_update_the_work(){
        $user=(new User())->factory()->create();
        $work=(new Work())->factory()->create();
        $response=$this->actingAs($user)->put("/works/".$work->workId,[
                                                        "workName"=>"workTest",
                                                        "description"=>"test test test",
                                                        "userSn"=>$user->id,
                                                        "startDate"=>now(),
                                                        "endDate"=>now()
                                                        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["work"]);
    }

    public function test_the_user_can_delete_a_work(){
        $user=(new User())->factory()->create();
        $work=(new Work())->factory()->create();
        $response=$this->actingAs($user)->delete("/works/".$work->workId);
        $this->assertEquals(200,$response->getStatusCode());
        $this->assertGreaterThan(0,$response->json()["work"]);
    }
}
