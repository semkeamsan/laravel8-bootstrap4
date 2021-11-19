<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'role_id' => 1,
                'en'    => 'Permissions',
                'km'    => 'ការអនុញ្ញាត',
                'slug' => 'permission',
                'routes' => collect(['index', 'create-store', 'edit-update', 'show', 'destroy']),
                'created_at'  => now(),
                'icon' => 'fal fa-shield-alt',
            ],
            [
                'role_id' => 1,
                'en'    => 'Roles',
                'km'    => 'តួនាទី',
                'slug' => 'role',
                'routes' => collect(['index', 'create-store', 'edit-update', 'show', 'destroy']),
                'created_at'  => now(),
                'icon' => 'fal fa-user-shield',
            ],
            [
                'role_id' => 1,
                'en'    => 'Users',
                'km'    => 'អ្នកប្រើប្រាស់',
                'slug' => 'user',
                'routes' => collect(['index', 'create-store', 'edit-update', 'show', 'destroy']),
                'created_at'  => now(),
                'icon' => 'fal fa-users',
            ],
            [
                'role_id' => 1,
                'en'    => 'Account',
                'km'    => 'គណនី',
                'slug' => 'account',
                'routes' => collect(['index', 'biography', 'email', 'password']),
                'created_at'  => now(),
                'icon' => 'fal fa-user',
            ],
            [
                'role_id' => 4,
                'en'    => 'Account',
                'km'    => 'គណនី',
                'slug' => 'account',
                'routes' => collect(['index', 'biography', 'email', 'password']),
                'created_at'  => now(),
                'icon' => 'fal fa-user',
            ],
        ];

        foreach ($data as  $value) {
            $role =  Permission::create([
                'role_id' => $value['role_id'],
                'routes' => $value['routes'],
                'slug' => $value['slug'],
                'icon' => $value['icon'],
            ]);
            $role->translations()->create([
                'locale'  => 'en',
                'name'    => $value['en'],
            ]);
            $role->translations()->create([
                'locale'  => 'km',
                'name'    => $value['km'],
            ]);
        }
    }
}
