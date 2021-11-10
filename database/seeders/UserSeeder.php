<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = collect(['admin', 'doctor', 'patient']);

        User::factory()
            ->count(10)
            ->state(new Sequence(
                fn () => ['role' => $roles->random()],
            ))
            ->create();
    }
}
