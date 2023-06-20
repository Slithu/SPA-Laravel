<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'surname' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@test.com',
            'phone' => '123123123',
            'password' => Hash::make('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Adam',
            'surname' => 'Kowalski',
            'role' => 'user',
            'email' => 'adamkowalski@gmail.com',
            'phone' => '222444555',
            'password' => Hash::make('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mateusz',
            'surname' => 'Piątek',
            'role' => 'user',
            'email' => 'mateuszpiatek@gmail.com',
            'phone' => '321321321',
            'password' => Hash::make('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'Zygmunt',
            'surname' => 'Stary',
            'role' => 'user',
            'email' => 'zygmuntstary@gmail.com',
            'phone' => '984355546',
            'password' => Hash::make('testtest'),
        ]);
    }
}
