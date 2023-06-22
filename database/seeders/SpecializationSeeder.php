<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Specializations;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specializations')->insert([
            'name' => 'Masseur/Physiotherapist'
        ]);

        DB::table('specializations')->insert([
            'name' => 'Beautican'
        ]);

        DB::table('specializations')->insert([
            'name' => 'Body Care Employee'
        ]);
    }
}
