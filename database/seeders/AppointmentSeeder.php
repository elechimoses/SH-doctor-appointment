<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::factory()
            ->count(1)
            // ->scheduled() // comment this if you do not want the appointment scheduled yet.
            ->for(User::factory()->role('patient'), 'patient')
            ->for(User::factory()->role('doctor'), 'doctor')
            ->create();
    }
}
