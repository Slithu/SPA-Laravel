<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Treatments;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatments')->insert([
            'image_path' => 'treatments/aupQzxzcksGCzPk2jJmeg8YTv30IvYyGQoZYEXCG.jpg',
            'name' => 'Relaxing Massage',
            'typeId' => '1',
            'description' => 'Relaxing massage draws a lot from classical massage techniques. There is excitement for body and spirit. Massaging the properties and the neck makes it possible to fully relax, forget about everyday life for a while and gain the energy needed to function properly.',
            'duration' => '00:50:00',
            'price' => '200.00'
        ]);
    }
}
