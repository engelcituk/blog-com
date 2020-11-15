<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    

        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // sino deshabilito esto me marca error de constraints
        
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // lo vuelvo a activar
    }
}
