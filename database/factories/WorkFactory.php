<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Work;
use Illuminate\Support\Str;
use \App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    protected $model=Work::class;
    public function definition()
    {
        $user=(new User())->factory()->create();
        return [
            "workName"=>$this->faker->name()
            , "description"=>Str::random(20)
            , "userSn"=>$user->id
        ];
    }
}
