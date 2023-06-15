<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Farabi',
            'email' => 'rizkyfarabi@gmail.com',
            'password' => Hash::make('farabi1234'),
            'is_admin' => 0
        ]);

        User::create([
            'name' => 'Yuliana',
            'email' => 'yuliana@gmail.com',
            'password' => Hash::make('yuliana1234'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Dzaki',
            'email' => 'dzaki@gmail.com',
            'password' => Hash::make('dzaki1234'),
            'is_admin' => 1
        ]);

    }
}
