<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Permission;
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
        //  factory(User::class, 10)->create();
        $user = User::create([
            "name" => 'Fabulous',
            "surname" => 'Final',
            "username" => 'Flash',
            "password" => Hash::make('TheFlash'),
            "email" => 'flash@gmail.com',
            "email_verified_at" => '',
            "contact" => '',
            "gender" => 'Male',
            "stamp" => '',
            "profilepic" => '',
        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $user = User::create([
            "name" => 'Pretty',
            "surname" => 'Sandrine',
            "username" => 'Iris',
            "password" => Hash::make('TheFlash'),
            "email" => 'don@gmail.com',
            "email_verified_at" => '',
            "contact" => '',
            "gender" => 'Female',
            "stamp" => '',
            "profilepic" => '',
        ]);

        $role = Role::create(['name' => 'Signer']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
