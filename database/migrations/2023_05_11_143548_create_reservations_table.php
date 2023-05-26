<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('typeId');
            $table->unsignedBigInteger('treatmentId');
            $table->unsignedBigInteger('employeeId');
            $table->dateTime('datetime');
            $table->enum('status', array('confirmed', 'cancelled'));
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('typeId')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('treatmentId')->references('id')->on('treatments')->onDelete('cascade');
            $table->foreign('employeeId')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
