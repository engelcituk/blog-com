<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $writerRole = Role::create(['name' => 'Writter']);

        $admin = new User;
        $admin->name="Cituk Caamal 1";
        $admin->email='citukcaamal1@gmail.com';
        $admin->password='12345678';
        $admin->save();

        $admin->assignRole($adminRole);


        $writer = new User;
        $writer->name="Cituk Caamal 2";
        $writer->email='citukcaamal2@gmail.com';
        $writer->password='12345678';
        $writer->save();
        $writer->assignRole($writerRole);

    }
}
