<?php

namespace Database\Seeders;

use App\Models\FrontPageCtaSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrontPageCtaSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FrontPageCtaSection::insert([
            [
                'top_title' => 'Click to Join the Advance Workshop',
                'main_title' => 'Training In Advannce Networking',
                'button_name' => 'join now',
                'button_url' => 'http://127.0.0.1:8000/',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
