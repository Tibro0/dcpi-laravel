<?php

namespace Database\Seeders;

use App\Models\BtebCourseRoutine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BtebCourseRoutineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BtebCourseRoutine::insert([
            [
                'image' => 'frontend/images/courses/course-1.jpg',
                'course_name' => 'Photography',
                'course_duration' => '03 Hours',
                'priority_number' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-2.jpg',
                'course_name' => 'Programming',
                'course_duration' => '03 Hours',
                'priority_number' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-3.jpg',
                'course_name' => 'Lifestyle Archives',
                'course_duration' => '03 Hours',
                'priority_number' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-4.jpg',
                'course_name' => 'Complete Freelancing',
                'course_duration' => '03 Hours',
                'priority_number' => 4,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-5.jpg',
                'course_name' => 'Branding Design',
                'course_duration' => '03 Hours',
                'priority_number' => 5,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/courses/course-6.jpg',
                'course_name' => 'Art Design',
                'course_duration' => '03 Hours',
                'priority_number' => 6,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
