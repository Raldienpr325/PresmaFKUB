<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\TokenUser;

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

        TokenUser::create([
            'token' => 'initoken1',
        ]);

        TokenUser::create([
            'token' => 'initoken2',
        ]);

        TokenUser::create([
            'token' => 'initoken3',
        ]);

        TokenUser::create([
            'token' => 'initoken4',
        ]);

        TokenUser::create([
            'token' => 'initoken5',
        ]);

        TokenUser::create([
            'token' => 'initoken6',
        ]);

        TokenUser::create([
            'token' => 'initoken7',
        ]);

        TokenUser::create([
            'token' => 'initoken8',
        ]);

        TokenUser::create([
            'token' => 'initoken9',
        ]);

        TokenUser::create([
            'token' => 'initoken10',
        ]);

        TokenUser::create([
            'token' => 'initoken11',
        ]);

        TokenUser::create([
            'token' => 'initoken12',
        ]);

        TokenUser::create([
            'token' => 'initoken13',
        ]);

        TokenUser::create([
            'token' => 'initoken14',
        ]);

        TokenUser::create([
            'token' => 'initoken15',
        ]);

        TokenUser::create([
            'token' => 'initoken16',
        ]);

        TokenUser::create([
            'token' => 'initoken17',
        ]);

        TokenUser::create([
            'token' => 'initoken18',
        ]);

        TokenUser::create([
            'token' => 'initoken19',
        ]);

        TokenUser::create([
            'token' => 'initoken20',
        ]);

        TokenUser::create([
            'token' => 'initoken21',
        ]);

        TokenUser::create([
            'token' => 'initoken22',
        ]);

        TokenUser::create([
            'token' => 'initoken23',
        ]);

        TokenUser::create([
            'token' => 'initoken24',
        ]);

        TokenUser::create([
            'token' => 'initoken25',
        ]);
    }
}
