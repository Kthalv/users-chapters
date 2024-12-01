<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use App\Models\Chapter;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Check if the user already exists before inserting
    if (!User::where('email', 'user@user.com')->exists()) {
        User::create([
            'name' => 'Test User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),  // Hash the password for security
        ]);
    }
    
        // Seed 10 chapters
        Chapter::factory(10)->create();
    
     
    // Check if the admin already exists before inserting
    if (!Admin::where('email', 'admin@admin.com')->exists()) {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),  // Hash the password for security
        ]);
    }
}
}
