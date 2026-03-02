<?php

namespace Database\Seeders;

use App\Models\ManagementCommittee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ManagementCommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ManagementCommittee::insert([
            [
                'image' => 'frontend/images/teachers/teacher-1.jpg',
                'name' => 'Jacke Masito',
                'slug' => Str::slug('Jacke Masito'),
                'designation' => 'Computer Science',
                'short_description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque accusamus tenetur ea harum delectus ab consequatur excepturi, odit qui in quo quia voluptate nam optio, culpa aspernatur. Error placeat iusto officia voluptas quae.',
                'email' => 'johndoe@email.com',
                'whatsapp' => '+120 345 876',
                'facebook_id_name' => 'john Doe',
                'facebook_url' => 'https://www.facebook.com/',
                'linkedin_id_name' => 'john Doe',
                'linkedin_url' => 'https://www.linkedin.com/',
                'twitter_id_name' => 'john Doe',
                'twitter_url' => 'https://x.com/',
                'website_url' => 'johnDoe.com',
                'address' => '1313 Boulevard Cremazie,Quebec',
                'address_url' => 'https://www.google.com/maps',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.',
                'priority_number' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/teachers/teacher-2.jpg',
                'name' => 'Clark Malik',
                'slug' => Str::slug('Clark Malik'),
                'designation' => 'Computer Science',
                'short_description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque accusamus tenetur ea harum delectus ab consequatur excepturi, odit qui in quo quia voluptate nam optio, culpa aspernatur. Error placeat iusto officia voluptas quae.',
                'email' => 'johndoe@email.com',
                'whatsapp' => '+120 345 876',
                'facebook_id_name' => 'john Doe',
                'facebook_url' => 'https://www.facebook.com/',
                'linkedin_id_name' => 'john Doe',
                'linkedin_url' => 'https://www.linkedin.com/',
                'twitter_id_name' => 'john Doe',
                'twitter_url' => 'https://x.com/',
                'website_url' => 'johnDoe.com',
                'address' => '1313 Boulevard Cremazie,Quebec',
                'address_url' => 'https://www.google.com/maps',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.',
                'priority_number' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/images/teachers/teacher-3.jpg',
                'name' => 'John Doe',
                'slug' => Str::slug('John Doe'),
                'designation' => 'Computer Science',
                'short_description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque accusamus tenetur ea harum delectus ab consequatur excepturi, odit qui in quo quia voluptate nam optio, culpa aspernatur. Error placeat iusto officia voluptas quae.',
                'email' => 'johndoe@email.com',
                'whatsapp' => '+120 345 876',
                'facebook_id_name' => 'john Doe',
                'facebook_url' => 'https://www.facebook.com/',
                'linkedin_id_name' => 'john Doe',
                'linkedin_url' => 'https://www.linkedin.com/',
                'twitter_id_name' => 'john Doe',
                'twitter_url' => 'https://x.com/',
                'website_url' => 'johnDoe.com',
                'address' => '1313 Boulevard Cremazie,Quebec',
                'address_url' => 'https://www.google.com/maps',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.',
                'priority_number' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
