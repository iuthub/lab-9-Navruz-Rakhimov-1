<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
            'title' => 'Learning Laravel',
            'content' => 'This blog post will get me right on track with Laravel!'
        ]);
        $post->save();

        $post = new Post([
            'title' => 'Something Else',
            'content' => 'Some other content'
        ]);
        $post->save();
    }
}
