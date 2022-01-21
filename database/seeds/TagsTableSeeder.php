<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tagsList = ['computer', 'life', 'food', 'weather', 'music', 'rock', 'hip-hop'];
        foreach ($tagsList as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
            # code...
        }
    }
}
