<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Aleksey',
            'email'=> 'Aleksey@mail.ru',
            'password'=>Hash::make('00000000'),
            'is_admin'=> 1
        ]);

        User::create([
            'name'=> 'Olya',
            'email'=> 'Olya@mail.ru',
            'password'=>Hash::make('00000000'),
        ]);

        User::create([
            'name'=> 'Maxim',
            'email'=> 'Maxim@mail.ru',
            'password'=>Hash::make('00000000'),
        ]);

    }
}
