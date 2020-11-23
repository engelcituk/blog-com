<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Role::truncate();
        User::truncate();

    
        $adminRole = Role::create(['name'=>'Admin', 'display_name'=>'Administrador']);
        $writerRole = Role::create(['name'=>'Writter','display_name'=>'Escritor']);

        Permission::create(['name'=>'View categories','display_name'=>'Ver categorias']);
        Permission::create(['name'=>'Create categories','display_name'=>'Crear categorias']);
        Permission::create(['name'=>'Update categories','display_name'=>'Actualizar categorias']);
        Permission::create(['name'=>'Delete categories','display_name'=>'Borrar categorias']);

        Permission::create(['name'=>'View posts','display_name'=>'Ver publicaciones']);
        Permission::create(['name'=>'Create posts','display_name'=>'Crear publicaciones']);
        Permission::create(['name'=>'Update posts','display_name'=>'Actualizar publicaciones']);
        Permission::create(['name'=>'Delete posts','display_name'=>'Borrar publicaciones']);

        Permission::create(['name'=>'View users','display_name'=>'Ver usuarios']);
        Permission::create(['name'=>'Create users','display_name'=>'Crear usuarios']);
        Permission::create(['name'=>'Update users','display_name'=>'Actualizar usuarios']);
        Permission::create(['name'=>'Delete users','display_name'=>'Borrar usuarios']);

        Permission::create(['name'=>'View roles','display_name'=>'Ver roles']);
        Permission::create(['name'=>'Create roles','display_name'=>'Crear roles']);
        Permission::create(['name'=>'Update roles','display_name'=>'Actualizar roles']);
        Permission::create(['name'=>'Delete roles','display_name'=>'Borrar roles']);

        Permission::create(['name'=>'View permissions','display_name'=>'Ver permisos']);
        Permission::create(['name'=>'Create permissions','display_name'=>'Crear permisos']);
        Permission::create(['name'=>'Update permissions','display_name'=>'Actualizar permisos']);
        Permission::create(['name'=>'Delete permissions','display_name'=>'Borrar permisos']);


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
