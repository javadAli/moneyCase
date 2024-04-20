<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Users;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::create([ 
        //     'name' => 'Test User2',
        //     'email' => 'test@example2.com',
        //     'password'=>\Hash::make("123")
        // ]);
    }
}
