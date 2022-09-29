<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\City;
use App\Models\Post;
use App\Models\State;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Creative Studio',
             'email' => 'web415@gmail.com',
         ]);
        $posts = Post::factory(250)->create();

        $posts->each(function ($post){
            State::factory(1)->create(['post_id' => $post->id]);
        });

        $this->call(CategorySeeder::class);
        $this->call(CitySeeder::class);

    }
}
