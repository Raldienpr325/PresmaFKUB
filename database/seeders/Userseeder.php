<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
