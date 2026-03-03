<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscriber::insert([
            [
                'email' => 'admin@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'user@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
