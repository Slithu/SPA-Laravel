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
        DB::table('user')->insert([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'test@gmail.com',
            'phone' => '123123123',
            'password' => Hash::make('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'testT',
            'surname' => 'testT',
            'email' => 'test2@gmail.com',
            'phone' => '222444555',
            'password' => Hash::make('testtest'),
        ]);

        DB::table('users')->insert([
            'name' => 'testt',
            'surname' => 'testt',
            'email' => 'testt@gmail.com',
            'phone' => '321321321',
            'password' => Hash::make('testtest'),
        ]);
    }
}
