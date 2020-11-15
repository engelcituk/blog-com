<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name="Cituk Caamal 1";
        $user->email='citukcaamal1@gmail.com';
        $user->password='12345678';
        $user->save();

        $user = new User;
        $user->name="Cituk Caamal 2";
        $user->email='citukcaamal2@gmail.com';
        $user->password='12345678';
        $user->save();
    }
}
