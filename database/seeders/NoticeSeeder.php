<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notice::insert([
            [
                'image' => 'frontend/images/events/event-1.jpg',
                'title' => 'Teaching Materials and Testing Methods',
                'slug' => Str::slug('Teaching Materials and Testing Methods'),
                'date' => Carbon::parse('2026-02-02'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!',
                'priority_number' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/events/event-2.jpg',
                'title' => 'Biltong sirloin sausage brisket porchetta prosciutto',
                'slug' => Str::slug('Biltong sirloin sausage brisket porchetta prosciutto'),
                'date' => Carbon::parse('2026-02-02'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!',
                'priority_number' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
