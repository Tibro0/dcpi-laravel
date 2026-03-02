<?php

namespace Database\Seeders;

use App\Models\BtebCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BtebCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BtebCourse::insert([
            [
                'image' => 'frontend/images/courses/course-1.jpg',
                'name' => 'Photography',
                'slug' => Str::slug('Photography'),
                'month' => '06 month',
                'duration' => '03 Hours',
                'course_fee' => '6000 Taka',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'priority_number' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-2.jpg',
                'name' => 'Programming',
                'slug' => Str::slug('Programming'),
                'month' => '06 month',
                'duration' => '03 Hours',
                'course_fee' => '6000 Taka',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'priority_number' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-3.jpg',
                'name' => 'Lifestyle Archives',
                'slug' => Str::slug('Lifestyle Archives'),
                'month' => '06 month',
                'duration' => '03 Hours',
                'course_fee' => '6000 Taka',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'priority_number' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-4.jpg',
                'name' => 'Complete Freelancing',
                'slug' => Str::slug('Complete Freelancing'),
                'month' => '06 month',
                'duration' => '03 Hours',
                'course_fee' => '6000 Taka',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'priority_number' => 4,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-5.jpg',
                'name' => 'Branding Design',
                'slug' => Str::slug('Branding Design'),
                'month' => '06 month',
                'duration' => '03 Hours',
                'course_fee' => '6000 Taka',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'priority_number' => 5,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-6.jpg',
                'name' => 'Art Design',
                'slug' => Str::slug('Art Design'),
                'month' => '06 month',
                'duration' => '03 Hours',
                'course_fee' => '6000 Taka',
                'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
                'priority_number' => 6,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
