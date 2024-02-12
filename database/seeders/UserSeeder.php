<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create( [
            'name' => "sys",
            'email' => "sys@nado.ma",
            'email_verified_at' => now(),
            'role' => "admin",
            'password' => '$2y$12$zMrawLdJshzgf4CmTUr//.HVDS5HLC4GqzYFfu5uasRk68yOADCJe', // password
        ]);
        $user->assignRole('admin');
    }
}
