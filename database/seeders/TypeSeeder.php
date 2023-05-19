<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Types;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'name' => 'SPA Massage'
        ]);

        DB::table('types')->insert([
            'name' => 'Facial Treatments'
        ]);

        DB::table('types')->insert([
            'name' => 'Body Treatments'
        ]);
    }
}
