<?php

namespace Database\Seeders;

use App\Models\BannerFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerFeature::insert([
            [
                'icon' => 'ti-book',
                'title' => 'Scholorship News',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'ti-blackboard',
                'title' => 'Our Notice Board',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'ti-agenda',
                'title' => 'Our Achievements',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'ti-write',
                'title' => 'Admission Now',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
