<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //miscelaneos
        Category::create(['name' => 'Comunicado','icon'=>'fas fa-hotel']);
        Category::create(['name' => 'Noticia','icon'=>'fas fa-utensils']);
        Category::create(['name' => 'Opinion','icon'=>'fas fa-cocktail']);
        Category::create(['name' => 'Evento','icon'=>'fas fa-bus']);
        Category::create(['name' => 'Reunion','icon'=>'fas fa-toolbox']);
    }
}
