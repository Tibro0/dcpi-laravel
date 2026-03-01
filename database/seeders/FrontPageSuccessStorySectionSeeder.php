<?php

namespace Database\Seeders;

use App\Models\FrontPageSuccessStorySection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrontPageSuccessStorySectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FrontPageSuccessStorySection::insert([
            [
                'image' => 'frontend/images/backgrounds/success-story.jpg',
                'video_link'  => 'https://www.youtube.com/',
                'title' => 'Success Stories',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
