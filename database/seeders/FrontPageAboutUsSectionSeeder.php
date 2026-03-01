<?php

namespace Database\Seeders;

use App\Models\FrontPageAboutUsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrontPageAboutUsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FrontPageAboutUsSection::insert([
            [
                'image' => 'frontend/images/about/about-us.jpg',
                'title' => 'About Educenter',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
                'button_name' => 'Learn more',
                'button_url' => 'http://127.0.0.1:8000/',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
