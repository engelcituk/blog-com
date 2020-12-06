<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => '#tag1 super']);
        Tag::create(['name' => '#tag2 hurry']);
        Tag::create(['name' => '#tag3']);
        Tag::create(['name' => '#tag4']);
        Tag::create(['name' => '#tag5']);

    }
}


