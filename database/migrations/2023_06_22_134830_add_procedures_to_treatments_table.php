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
            CREATE PROCEDURE GetSpaMassagesTreatments()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'SPA Massages';
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetFacialTreatments()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'Facial Treatments';
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetBodyTreatments()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'Body Treatments';
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetTreatmentsAsc()
            BEGIN
            SELECT T.id, T.image_path, T.name, TP.name AS typeId, T.description, T.duration, T.price
            FROM Treatments T
            INNER JOIN Types TP ON T.typeId = TP.id
            ORDER BY T.price ASC;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetTreatmentsDesc()
            BEGIN
            SELECT T.id, T.image_path, T.name, TP.name AS typeId, T.description, T.duration, T.price
            FROM Treatments T
            INNER JOIN Types TP ON T.typeId = TP.id
            ORDER BY T.price DESC;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetSpaMassagesTreatmentsAsc()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'SPA Massages'
            ORDER BY t.price ASC;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetSpaMassagesTreatmentsDesc()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'SPA Massages'
            ORDER BY t.price DESC;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetFacialTreatmentsAsc()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'Facial Treatments'
            ORDER BY t.price ASC;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetFacialTreatmentsDesc()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'Facial Treatments'
            ORDER BY t.price DESC;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetBodyTreatmentsAsc()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'Body Treatments'
            ORDER BY t.price ASC;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE GetBodyTreatmentsDesc()
            BEGIN
            SELECT t.id, t.image_path, t.name, ty.name AS typeId, t.description, t.duration, t.price
            FROM treatments t
            INNER JOIN types ty ON t.typeId = ty.id
            WHERE ty.name = 'Body Treatments'
            ORDER BY t.price DESC;
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS GetSpaMassagesTreatments');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetFacialTreatments');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetBodyTreatments');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetTreatmentsAsc');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetTreatmentsDesc');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetSpaMassagesTreatmentsAsc');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetSpaMassagesTreatmentsDesc');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetFacialTreatmentsAsc');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetFacialTreatmentsDesc');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetBodyTreatmentsAsc');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetBodyTreatmentsDesc');
    }
};
