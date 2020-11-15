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
        Category::create(['name' => 'Alojamiento','icon'=>'fas fa-hotel']);
        Category::create(['name' => 'Alimentos','icon'=>'fas fa-utensils']);
        Category::create(['name' => 'Bebidas','icon'=>'fas fa-cocktail']);
        Category::create(['name' => 'Transporte','icon'=>'fas fa-bus']);
        Category::create(['name' => 'Equipo','icon'=>'fas fa-toolbox']);
    }
}
