<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Business;
use App\Models\Person;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BusinessSedder::class);
        $this->call(UserSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(TaskSeeder::class);
    }
}
