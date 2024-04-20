<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \App\Models\User;
use Tests\TestCase;

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
}
