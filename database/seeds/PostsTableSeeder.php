<?php

use App\Post;
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
        //
        for ($i = 0; $i < 200; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence();
            $newPost->content = $faker->paragraph(50);
            $newPost->published = $faker->boolean();
            $newPost->category = $faker->randomElement(['Tech', 'Motors', 'Health', 'Sport', 'Politics', 'Fashion']);
            $newPost->author = $faker->randomElement(['CinCenFrank', 'MarioRossi', 'HappyGranny']);
            $newPost->imageSrc = $faker->imageUrl();
            $newPost->save();
        }
    }
}
