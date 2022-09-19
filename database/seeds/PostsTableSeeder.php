<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<50; $i++) { 
            $newPost = new Post();
            $newPost->author = $faker->name();
            $newPost->title = $faker->realText(30);
            $newPost->article_text = $faker->paragraph(4, true);
            $newPost->date = $faker->dateTimeThisYear();
            $newPost->save();
        }
    }
}
