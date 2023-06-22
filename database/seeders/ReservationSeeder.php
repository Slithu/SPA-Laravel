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
            'userId' => '7',
            'typeId' => '1',
            'treatmentId' => '51',
            'employeeId' => '11',
            'datetime' => '2023-06-23 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '7',
            'typeId' => '2',
            'treatmentId' => '60',
            'employeeId' => '12',
            'datetime' => '2023-06-24 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '7',
            'typeId' => '3',
            'treatmentId' => '66',
            'employeeId' => '13',
            'datetime' => '2023-07-03 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '12',
            'typeId' => '1',
            'treatmentId' => '52',
            'employeeId' => '16',
            'datetime' => '2023-06-23 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '12',
            'typeId' => '2',
            'treatmentId' => '61',
            'employeeId' => '15',
            'datetime' => '2023-06-24 11:00:00',
            'status' => 'confirmed'
        ]);

        DB::table('reservations')->insert([
            'userId' => '12',
            'typeId' => '3',
            'treatmentId' => '67',
            'employeeId' => '14',
            'datetime' => '2023-07-03 11:00:00',
            'status' => 'confirmed'
        ]);
    }
}
