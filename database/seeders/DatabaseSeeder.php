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
            'token' => bcrypt('initoken1'),
            'name' => 'Pemilik Token1',
            'email' => 'PemilikToken1@gmail.com',
            'google_id' => 'daritoken1',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken2'),
            'name' => 'Pemilik Token2',
            'email' => 'PemilikToken2@gmail.com',
            'google_id' => 'daritoken2',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken3'),
            'name' => 'Pemilik Token3',
            'email' => 'PemilikToken3@gmail.com',
            'google_id' => 'daritoken3',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken4'),
            'name' => 'Pemilik Token4',
            'email' => 'PemilikToken4@gmail.com',
            'google_id' => 'daritoken4',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken5'),
            'name' => 'Pemilik Token5',
            'email' => 'PemilikToken5@gmail.com',
            'google_id' => 'daritoken5',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' =>bcrypt('initoken6'),
            'name' => 'Pemilik Token6',
            'email' => 'PemilikToken6@gmail.com',
            'google_id' => 'daritoken6',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken7'),
            'name' => 'Pemilik Token7',
            'email' => 'PemilikToken7@gmail.com',
            'google_id' => 'daritoken7',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken8'),
            'name' => 'Pemilik Token8',
            'email' => 'PemilikToken8@gmail.com',
            'google_id' => 'daritoken8',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken9'),
            'name' => 'Pemilik Token9',
            'email' => 'PemilikToken9@gmail.com',
            'google_id' => 'daritoken9',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken10'),
            'name' => 'Pemilik Token10',
            'email' => 'PemilikToken10@gmail.com',
            'google_id' => 'daritoken10',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken11'),
            'name' => 'Pemilik Token11',
            'email' => 'PemilikToken11@gmail.com',
            'google_id' => 'daritoken11',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken12'),
            'name' => 'Pemilik Token12',
            'email' => 'PemilikToken12@gmail.com',
            'google_id' => 'daritoken12',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken13'),
            'name' => 'Pemilik Token13',
            'email' => 'PemilikToken13@gmail.com',
            'google_id' => 'daritoken13',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken14'),
            'name' => 'Pemilik Token14',
            'email' => 'PemilikToken14@gmail.com',
            'google_id' => 'daritoken14',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken15'),
            'name' => 'Pemilik Token15',
            'email' => 'PemilikToken15@gmail.com',
            'google_id' => 'daritoken15',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken16'),
            'name' => 'Pemilik Token16',
            'email' => 'PemilikToken16@gmail.com',
            'google_id' => 'daritoken16',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken17'),
            'name' => 'Pemilik Token17',
            'email' => 'PemilikToken17@gmail.com',
            'google_id' => 'daritoken17',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken18'),
            'name' => 'Pemilik Token18',
            'email' => 'PemilikToken18@gmail.com',
            'google_id' => 'daritoken18',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken19'),
            'name' => 'Pemilik Token19',
            'email' => 'PemilikToken19@gmail.com',
            'google_id' => 'daritoken19',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken20'),
            'name' => 'Pemilik Token20',
            'email' => 'PemilikToken20@gmail.com',
            'google_id' => 'daritoken20',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken21'),
            'name' => 'Pemilik Token21',
            'email' => 'PemilikToken21@gmail.com',
            'google_id' => 'daritoken21',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken22'),
            'name' => 'Pemilik Token22',
            'email' => 'PemilikToken22@gmail.com',
            'google_id' => 'daritoken22',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken23'),
            'name' => 'Pemilik Token23',
            'email' => 'PemilikToken23@gmail.com',
            'google_id' => 'daritoken23',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken24'),
            'name' => 'Pemilik Token24',
            'email' => 'PemilikToken24@gmail.com',
            'google_id' => 'daritoken24',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);

        TokenUser::create([
            'token' => bcrypt('initoken25'),
            'name' => 'Pemilik Token25',
            'email' => 'PemilikToken25@gmail.com',
            'google_id' => 'daritoken25',
            'locale' => 'en',
            'password' => bcrypt('12345678'),
            'level' => 'superuser',
        ]);
    }
}
