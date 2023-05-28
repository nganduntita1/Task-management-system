<?php

namespace Database\Seeders;

use App\Models\Task;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $users = User::pluck('id');

        for ($i = 1; $i <= 10; $i++) {
            Task::create([
                'user_id' => $users->random(),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'due_date' => $faker->dateTimeBetween('now', '+7 days'),
            ]);
        }
    }
}