<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@isekai.com',
            'password' => Hash::make('Zxasqw12'),
            'admin' => true
        ]);
    }
}
