<?php

namespace Database\Factories;

use App\Enum\ApplicationBackgroundColor;
use App\Enum\ApplicationColor;
use App\Enum\ApplicationStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApplicationImage>
 */
class ApplicationImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'color' => fake()->randomElement([ApplicationColor::White, ApplicationColor::Black]),
            'background' => fake()->randomElement([ApplicationBackgroundColor::GreenBackground, ApplicationBackgroundColor::OrangeBackground, ApplicationBackgroundColor::TurquoiseBackground, ApplicationBackgroundColor::PurpleBackground]),
            'status' => fake()->randomElement([ApplicationStatus::Done, ApplicationStatus::In_Progress, ApplicationStatus::Created, ApplicationStatus::Rejected])
        ];
    }
}