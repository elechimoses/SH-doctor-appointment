<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => $this->faker->sentence(),
            'message' => $this->faker->paragraph(3),
        ];
    }

    /**
     * Indicate that the appointment is scheduled.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function scheduled()
    {
        return $this->state(function () {
            return [
                'appointment_time' => now()->addDay(),
            ];
        });
    }
}
