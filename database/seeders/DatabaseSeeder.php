<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Address;
use App\Models\Device;
use App\Models\Sensor;
use App\Models\Client;
use App\Models\Property;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $adminUser = User::firstOrCreate(['name' => 'Agris'], ['email' => 'sd70027@students.lu.lv', 'password' => bcrypt('pppppppp')]);
        $user = User::firstOrCreate(['name' => 'John Doe'], ['email' => 'john@example.com', 'password' => bcrypt('password')]);  
  
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory()->create([
        //   'name' => 'Agris',
        //   'email' => 'sd70027@students.lu.lv',
        // ]);
    }
}
