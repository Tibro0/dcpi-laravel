<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialLink::insert([
            [
                'icon' => 'ti-facebook',
                'url' => 'http://127.0.0.1:8000/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'ti-twitter-alt',
                'url' => 'http://127.0.0.1:8000/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'ti-linkedin',
                'url' => 'http://127.0.0.1:8000/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'ti-instagram',
                'url' => 'http://127.0.0.1:8000/',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
