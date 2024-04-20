<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Book;
use \App\Models\User;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    
    protected $model=Book::class;

    public function definition()
    {
        $user=(new User())->factory()->create();
        return  [
                    "bookName"=>fake()->name()
                    , "description"=>Str::random(20)
                    , "SnUSer"=>$user->id
                ];
    }
}
