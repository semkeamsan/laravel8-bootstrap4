<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
                'id'    => 1,
                'en'    => 'Admin',
                'km'    => 'អ្នកគ្រប់គ្រងជាន់ខ្ពស់',
                'slug'  => 'admin',
            ],
            [
                'id'    => 2,
                'en'    => 'Leader',
                'km'    => 'មេដឹកនាំ',
                'slug'  => 'leader',
            ],
            [
                'id'    => 3,
                'en'    => 'Editor',
                'km'    => 'អ្នកកែប្រែ',
                'slug'  => 'editor',
            ],
            [
                'id'    => 4,
                'en'    => 'Users',
                'km'    => 'អ្នកប្រើប្រាស់',
                'slug'  => 'user',
            ],
        ];
        foreach ($data as  $value) {
            $role =  Role::create([
                'slug' => $value['slug']
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
