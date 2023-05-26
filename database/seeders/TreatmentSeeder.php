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
            'image_path' => 'treatments/hqRzM1olwpFFwqvfBbl7b8YZoFQLpZoo1HqDgp75.jpg',
            'name' => 'Relaxing Massage',
            'typeId' => '1',
            'description' => 'Relaxing massage draws a lot from classical massage techniques. It is a real pleasure for body and soul. Massaging your back and neck allows you to fully relax, forget about everyday life for a while and gain energy so necessary for everyday functioning.',
            'duration' => '00:50:00',
            'price' => '220.00'
        ]);
    }
}
