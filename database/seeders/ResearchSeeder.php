<?php

namespace Database\Seeders;

use App\Models\Research;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Research::insert([
            [
                'image' => 'frontend/images/research/research-1.jpg',
                'title' => 'Geography',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'priority_number' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/research/research-2.jpg',
                'title' => 'Mathematical',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'priority_number' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/research/research-3.jpg',
                'title' => 'MHumanitiesl',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'priority_number' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/research/research-4.jpg',
                'title' => 'Physical & Sciences',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'priority_number' => 4,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/research/research-5.jpg',
                'title' => 'Biological Sciences',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'priority_number' => 5,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/research/research-6.jpg',
                'title' => 'Archaeology',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'priority_number' => 6,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
