<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TokenUser;

class TokenUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TokenUser::create([
            'token' => 'initokenpertama',
        ]);
    }
}
