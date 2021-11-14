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
        Role::insert([
            [
                'id'    => 1,
                'en'    => 'Admin',
                'km'    => 'អ្នកគ្រប់គ្រងជាន់ខ្ពស់',
                'slug'  => 'admin',
                'description' => 'Administrator',
                'created_at'  => now(),
            ],
            [
                'id'    => 2,
                'en'    => 'Leader',
                'km'    => 'មេដឹកនាំ',
                'slug'  => 'leader',
                'description' => 'Leader',
                'created_at'  => now(),
            ],
            [
                'id'    => 3,
                'en'    => 'Editor',
                'km'    => 'អ្នកកែប្រែ',
                'slug'  => 'editor',
                'description' => 'Editor',
                'created_at'  => now(),
            ],
            [
                'id'    => 4,
                'en'    => 'Users',
                'km'    => 'អ្នកប្រើប្រាស់',
                'slug'  => 'user',
                'description' => 'User',
                'created_at'  => now(),
            ],
        ]);
    }
}
