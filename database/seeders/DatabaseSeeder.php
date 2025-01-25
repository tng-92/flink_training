<?php

namespace Database\Seeders;

use App\Enums\User\UserStatus;
use App\Enums\User\UserType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Tim George',
            'email' => 't.n.george92@gmail.com',
            'type' => UserType::SUPER,
            'status' => UserStatus::ACTIVE,
        ]);

        User::factory(5)->create();
    }
}
