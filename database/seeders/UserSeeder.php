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
        User::insert([
            'name'=> 'Ram',
            'email'=> 'ram@gmail.com',
            'password'=> Hash::make('ram123'),
        ]);
    }
}
