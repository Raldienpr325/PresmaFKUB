<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'adminevote',
            'email' => 'adminevote@example.com',
            'google_id' => '12345678910',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'admin',
        ]);
    }
}
