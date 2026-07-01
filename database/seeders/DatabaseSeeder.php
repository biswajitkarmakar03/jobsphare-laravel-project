<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create your own user
        User::factory()->create([
            'name' => 'Biswajit Karmakar',
            'email' => 'biswajit@test.com',
        ]);

        // Create 10 employers
        Employer::factory(10)->create();

        // Create 50 jobs
        Job::factory(20)->create();
    }
}