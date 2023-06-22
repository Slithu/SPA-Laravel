<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("
            CREATE PROCEDURE GetMasseurSpecializations()
            BEGIN
            SELECT e.*, s.name AS specializationId
            FROM Employees e
            INNER JOIN Specializations s ON e.specializationId = s.id
            WHERE s.name = 'Masseur/Physiotherapist';
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetBeauticianSpecializations()
            BEGIN
            SELECT e.*, s.name AS specializationId
            FROM Employees e
            INNER JOIN Specializations s ON e.specializationId = s.id
            WHERE s.name = 'Beautician';
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetBodyCareEmployeeSpecializations()
            BEGIN
            SELECT e.*, s.name AS specializationId
            FROM Employees e
            INNER JOIN Specializations s ON e.specializationId = s.id
            WHERE s.name = 'Body Care Employee';
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS GetMasseurSpecializations');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetBeauticianSpecializations');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetBodyCareEmployeeSpecializations');
    }
};
