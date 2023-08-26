<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Users::create([
            'email' => 'admin@gmail.com',
            'phone' => '0378995544',
            'password' => '$2y$10$bj3eW5fX4yYiQb.RLd7lf.BL5XYdTqkimWJZ7hx7a5UPlWmHZkPwa',
            'full_name' => 'Admin',
            'status' => 'active',
            'type' => 1,
            'role' => 1
        ]);
        for ($i=1; $i<=6;$i++){
            Contact::create(
                [
                    'full_name' => "Manh$i",
                    'email' => "Manh$@gmail.com",
                    'phone' => "037899554$i",
                    'status' => 'processed'
                ],
            );
        }


    }
}
