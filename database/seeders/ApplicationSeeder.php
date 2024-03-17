<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\ApplicationImage;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(8)->has(
            Application::factory(5)->has(
                ApplicationImage::factory(5),
                'images'
            )
        )->create();
    }
}