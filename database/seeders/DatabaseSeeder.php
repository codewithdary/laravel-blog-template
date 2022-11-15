<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(10)->create();
        Post::factory()->times(20)->create();
        Tag::factory()->times(4)->create();

        for($i = 0; $i < 20; $i++) {
            \App\Models\PostTag::factory()->create([
                'post_id' => Post::all()->random()->id,
                'tag_id' => Tag::all()->random()->id
            ]);
        }
    }
}
