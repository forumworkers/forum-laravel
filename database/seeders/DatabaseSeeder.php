<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       // \App\Models\Product::truncate();
       \App\Models\User::truncate();
     // \App\Models\Category::truncate();
     // \App\Models\SubCategory::truncate();
     // \App\Models\MainCategory::truncate();
       // \App\Models\Post::truncate();
       // \App\Models\UserPost::truncate();
     // \App\Models\Calification::truncate();
       \App\Models\Message::truncate();
       \App\Models\MessagePost::truncate();
       \App\Models\Membership::truncate();
       \App\Models\Price::truncate();
       // \App\Models\Payment::truncate();
       // \App\Models\Condition::truncate();
       // \App\Models\Revition::truncate();
     // \App\Models\Type::truncate();
       // \App\Models\UserProduct::truncate();



       // creamos productos
       // \App\Models\Product::factory(10)->create();
       \App\Models\User::factory(3)->create();
     // \App\Models\Category::factory(3)->create();
     // \App\Models\SubCategory::factory(6)->create();
     // \App\Models\MainCategory::factory(12)->create();
       // \App\Models\Post::factory(250)->create();
       // \App\Models\UserPost::factory(350)->create();
     // \App\Models\Calification::factory(2)->create();
       \App\Models\Message::factory(30)->create();
       \App\Models\MessagePost::factory(30)->create();
       \App\Models\Membership::factory(3)->create();
       \App\Models\Price::factory(3)->create();
       // \App\Models\Payment::factory(3)->create();
       // \App\Models\Condition::factory(3)->create();
       // \App\Models\Revition::factory(3)->create();
     // \App\Models\Type::factory(30)->create();
       // \App\Models\UserProduct::factory(1)->create();
   }
}
