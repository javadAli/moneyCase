<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;
use \App\Models\Work;
use \App\Models\Worker;
class WorkerTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_method_index_of_worker_exists()
    {
        $user=(new User())->factory()->create();
        $response= $this->actingAs($user)->get("/workers/");
        $response->assertStatus(200);
    }

    public function test_the_user_can_store_new_worker(){
        $user=(new User())->factory()->create();
        $work=(new Work())->factory()->create();
        $response=$this->actingAs($user)->post("/workers/",[
            "workerName"=>fake()->name
            , "description"=>Str::random(20)
            , "work_workId"=>$work->workId
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()['worker']));
    }
    public function test_the_user_can_update_worker(){
        $user=(new User())->factory()->create();
        $worker=(new Worker())->factory()->create();
        $work=(new Work())->factory()->create();
        $response=$this->actingAs($user)->put("/workers/".$worker->workerId,[
            "workerName"=>fake()->name
            , "description"=>Str::random(20)
            , "work_workId"=>$work->workId
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["worker"]);
    }
    public function test_the_user_can_delete_the_worker(){
        $user=(new User())->factory()->create();
        $worker=(new Worker())->factory()->create();
        $response=$this->actingAs($user)->delete("/workers/".$worker->workerId);
        $this->assertEquals(200,$response->getStatusCode());
        $this->assertGreaterThan(0,$response->json()["worker"]);
    }
}
