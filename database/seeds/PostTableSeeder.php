<?php

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 3; $i++) { 
            $new_post = new Post();
            $new_post->title = "Quest è il Titolo"; //$faker->sentence();
            $new_post->content = $faker->text();
            $new_post->slug = Post::generateSlug($new_post->title);
            $new_post->save();
        }
    }
}
