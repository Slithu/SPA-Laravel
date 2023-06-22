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
            'userId' => '2',
            'typeId' => '1',
            'treatmentId' => '1',
            'employeeId' => '1',
            'datetime' => '2023-06-23 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '2',
            'typeId' => '2',
            'treatmentId' => '7',
            'employeeId' => '2',
            'datetime' => '2023-06-24 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '2',
            'typeId' => '3',
            'treatmentId' => '13',
            'employeeId' => '3',
            'datetime' => '2023-07-03 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '3',
            'typeId' => '1',
            'treatmentId' => '2',
            'employeeId' => '6',
            'datetime' => '2023-06-23 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '3',
            'typeId' => '2',
            'treatmentId' => '8',
            'employeeId' => '5',
            'datetime' => '2023-06-24 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '3',
            'typeId' => '3',
            'treatmentId' => '14',
            'employeeId' => '4',
            'datetime' => '2023-07-03 11:00:00',
            'status' => 'confirmed'
        ]);
    }
}
