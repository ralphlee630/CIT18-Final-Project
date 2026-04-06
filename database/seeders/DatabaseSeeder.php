<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        \App\Models\User::factory(3)->create()->each(function ($user) {
            \App\Models\Task::factory(rand(5, 7))->create(['user_id' => $user->id]);
        });
    }
}
