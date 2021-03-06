<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(\App\Post::class, 5)->create();

        foreach ($posts as $post) {
            $post->comments()->create([
                'text' => 'random_text',
                'user_id' => $post->user_id
            ]);
        }
    }
}
