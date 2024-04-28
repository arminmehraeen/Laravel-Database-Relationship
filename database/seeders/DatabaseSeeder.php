<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(2)->create();
        $categories = Category::factory(3)->create();

        foreach ($users as $user) {
            $posts = Post::factory(2)->for($user)->create();
            foreach ($posts as $post) {
                Comment::factory(2)->for($user)->for($post)->create() ;
                foreach ($categories as $category) {
                    $post->categories()->attach($category->id);
                }
                $user->likedPosts()->attach($post->id);
            }

        }

    }
}
