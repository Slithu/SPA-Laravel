<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Employees;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'image_path' => 'employees/onVth51W4ZMojAfU9LP3NeuYf5LEhc1t7miR0iyA.jpg',
            'name' => 'Piotr',
            'surname' => 'Nowak',
            'email' => 'pn@gmail.com',
            'phone' => '243243238',
            'specializationId' => '1'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/TV7lT92ZLDlNiET8d2ZXTZdH1IsxbXFBIejI2g48.jpg',
            'name' => 'Ewa',
            'surname' => 'Kowal',
            'email' => 'ek@gmail.com',
            'phone' => '433433433',
            'specializationId' => '2'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/ZY9p5eQIhDlUgBkOf7lgPExVeXyJCEI0etfqsbbT.jpg',
            'name' => 'Andrzej',
            'surname' => 'Bury',
            'email' => 'ab@gmail.com',
            'phone' => '245543345',
            'specializationId' => '3'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/EpKLFeud8bQRSybvUfrIYGBZ90b1iFp6i6dk6oGE.jpg',
            'name' => 'Jan',
            'surname' => 'Łoś',
            'email' => 'jl@gmail.com',
            'phone' => '435234223',
            'specializationId' => '3'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/2qvaurJSURhqCoRtE6WHyV1CnwoHxroYp8Ayvc3q.jpg',
            'name' => 'Anna',
            'surname' => 'Twardak',
            'email' => 'at@gmail.com',
            'phone' => '983435235',
            'specializationId' => '2'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/E59uKIHKpe49dgiThVQ2M2gukkCzjrXQXfRyxxN7.jpg',
            'name' => 'Karolina',
            'surname' => 'Smok',
            'email' => 'ks@gmail.com',
            'phone' => '346686657',
            'specializationId' => '1'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/WXPDvAYwJ1cOaaW6z7Gy5qHjLpiguXZxt8fKRBJE.png',
            'name' => 'Agnieszka',
            'surname' => 'Mak',
            'email' => 'am@gmail.com',
            'phone' => '657934534',
            'specializationId' => '1'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/48MrphnHeof5O7sN4DQgCqQWKjVN6HylMFW1nDyA.png',
            'name' => 'Marta',
            'surname' => 'Dobrowolska',
            'email' => 'md@gmail.com',
            'phone' => '787766723',
            'specializationId' => '2'
        ]);

        DB::table('employees')->insert([
            'image_path' => 'employees/19cfEdc6EBTsNe1IXHwj5Olv8x3HeXCJLDRHUcsx.png',
            'name' => 'Monika',
            'surname' => 'Konieczna',
            'email' => 'mk@gmail.com',
            'phone' => '576743460',
            'specializationId' => '3'
        ]);
    }
}
