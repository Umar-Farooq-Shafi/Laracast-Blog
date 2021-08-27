<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        Post::factory(10)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi repellat libero perferendis provident aliquid enim fuga amet nisi id? Odio voluptates debitis reiciendis. Deleniti culpa molestias beatae modi, quasi saepe?</p>',
        //     'slug' => 'my-family-post'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi repellat libero perferendis provident aliquid enim fuga amet nisi id? Odio voluptates debitis reiciendis. Deleniti culpa molestias beatae modi, quasi saepe?</p>',
        //     'slug' => 'my-work-post'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi repellat libero perferendis provident aliquid enim fuga amet nisi id? Odio voluptates debitis reiciendis. Deleniti culpa molestias beatae modi, quasi saepe?</p>',
        //     'slug' => 'my-personal-post'
        // ]);
    }
}
