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
            // ->role('doctor') // add this if you want only doctors, but remember to comment out the state function
            ->state(new Sequence(
                fn () => ['role' => $roles->random()],
            ))
            ->create();
    }
}
