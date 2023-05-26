<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Reservations;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            'userId' => '4',
            'typeId' => '1',
            'treatmentId' => '1',
            'employeeId' => '11',
            'datetime' => '2023-10-10 10:00:00',
            'status' => 'confirmed'
        ]);
    }
}
