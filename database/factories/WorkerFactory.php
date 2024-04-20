<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use \App\Models\Worker;
use \App\Models\Work;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    protected $model=Worker::class;

    public function definition()
    {
        $work=(new Work())->factory()->create();
        return [
            "workerName"=>fake()->name()
            , "description"=>Str::random(20)
            , "workSn"=>$work->workId
            , "TimeStamp"=>now()
        ];
    }
}
