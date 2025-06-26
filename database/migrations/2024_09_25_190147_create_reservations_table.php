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
            $table->string('description')->default('');
            $table->datetime('datereservation')->default('1900-01-01');
            $table->string('day')->default('');
            $table->string('month')->default('');
            $table->string('year')->default('');
            $table->string('day_description')->default('');
            $table->string('month_description')->default('');
            $table->string('hour_initial')->default('');
            $table->string('hour_finish')->default('');
            $table->string('time_hour')->default('');
            $table->string('time_hour_initial')->default('');
            $table->string('time_hour_finish')->default('');
            $table->integer('id_schedule')->default(0);
            $table->integer('id_type_class')->default(0);
            $table->text('note');
            $table->string('id_status')->default(1);
            $table->integer('created_by')->default('1');
            $table->integer('updated_by')->default('1');
            $table->datetime('created_at')->default('1900-01-01');
            $table->datetime('updated_at')->default('1900-01-01');
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
