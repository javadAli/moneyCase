<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;
use \App\Models\User;
use \App\Models\Book;

class BookTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_method_of_books_work_and_exists()
    {
        $user=User::factory()->create();
        $response = $this->actingAs($user)->get("/books/");
        $response->assertStatus(200);
    }

    public function test_the_user_can_store_new_book(){
        $user=(new User())->factory()->create();
        $response=$this->actingAs($user)->post("/books",[
             "bookName"=>fake()->name()
            , "description"=>Str::random(20)
            , "SnUSer"=>$user->id
        ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,count($response->json()["book"]));
    }

    public function test_the_user_can_update_the_book(){
        $user=(new User())->factory()->create();
        $book=(new Book())->factory()->create();
        $response=$this->actingAs($user)->put("/books/".$book->BookSn,[
                                                                    "bookName"=>fake()->name()
                                                                    , "description"=>Str::random(20)
                                                                    , "SnUSer"=>$user->id
                                                                ]);
        $response->assertStatus(200);
        $this->assertGreaterThan(0,$response->json()["book"]);
    }
}
