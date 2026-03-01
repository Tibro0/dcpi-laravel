<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::insert([
            [
                'title' => 'Your bright future is our mission',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer',
                'button_text' => 'Apply now',
                'button_url' => 'http://127.0.0.1:8000/',
                'status' => 1,
            ],
            [
                'title' => 'Your bright future is our mission',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer',
                'button_text' => 'Apply now',
                'button_url' => 'http://127.0.0.1:8000/',
                'status' => 1,
            ],
            [
                'title' => 'Your bright future is our mission',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer',
                'button_text' => 'Apply now',
                'button_url' => 'http://127.0.0.1:8000/',
                'status' => 1,
            ],
        ]);
    }
}
