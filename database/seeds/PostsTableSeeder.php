<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\Uuid;

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
            $newPost->uuid = $faker->uuid();
            $newPost->title = $faker->sentence();
            $newPost->content = $faker->paragraph(50);
            $newPost->published = $faker->boolean();
            $newPost->author_id = 1;
            $newPost->category_id = $faker->numberBetween(1, 5);
            // $newPost->category = $faker->randomElement(['Tech', 'Motors', 'Health', 'Sport', 'Politics', 'Fashion']);
            // $newPost->author = $faker->randomElement(['CinCenFrank', 'MarioRossi', 'HappyGranny']);
            $newPost->imageSrc = $faker->imageUrl();
            $newPost->save();
        }
    }
}
