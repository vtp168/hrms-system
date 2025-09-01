<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'), // 🔑 កុំប្រើ "password" នៅ production
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Test',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
        ]);

        // ប្រសិនបើចង់ random users ច្រើន
        //User::factory(10)->create();
    }
}
