<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Listing;
use \App\Models\Application;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Company',
            'email' => 'company@example.com',
            'password' => bcrypt('password'),
            'is_recruiter' => true
        ]);

        User::factory(3)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Application::factory(10)->create();

        Listing::factory(10)->create();
    }
}
