<?php

namespace Database\Seeders;

use App\Models\DiplomaInEngineeringClassRoutine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiplomaInEngineeringClassRoutineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiplomaInEngineeringClassRoutine::insert([
            [
                'civil_1st_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'civil_2nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'civil_3nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'civil_4nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'civil_5nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'civil_6nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'civil_7nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',

                'computer_1st_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'computer_2nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'computer_3nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'computer_4nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'computer_5nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'computer_6nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'computer_7nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',

                'electrical_1st_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electrical_2nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electrical_3nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electrical_4nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electrical_5nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electrical_6nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electrical_7nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',

                'electronics_1st_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electronics_2nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electronics_3nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electronics_4nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electronics_5nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electronics_6nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'electronics_7nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',

                'telecommunication_1st_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'telecommunication_2nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'telecommunication_3nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'telecommunication_4nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'telecommunication_5nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'telecommunication_6nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',
                'telecommunication_7nd_semester_routine_image' => 'frontend/images/events/event-1.jpg',

                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
