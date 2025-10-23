<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'mobile' => '1234567890',
        ]);
        //asign role to user
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Student Name',
            'email' => 'student@example.com',
            'password' => 'password',
            'mobile' => '2234567890',
            ]);
        $user->assignRole('student');
    }
}
