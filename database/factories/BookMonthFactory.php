<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\BookMonth;
use \App\Models\Book;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookMonth>
 */
class BookMonthFactory extends Factory
{
    
    protected $model=BookMonth::class;
    public function definition()
    {
        $book=(new Book())->factory()->create();
        return [
             "book_bookSn"=>$book->BookSn
            , "NameMonth"=>fake()->monthName()
        ];
    }
}
