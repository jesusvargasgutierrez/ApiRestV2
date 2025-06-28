<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('id_reservation')->default(0);
            $table->integer('id_classtype')->default(0);
            $table->string('class_type')->default('');
            $table->integer('id_schedulemat')->default(0);
            $table->string('schedule_mat')->default('');
            $table->integer('id_schedulevesp')->default(0);
            $table->string('schedule_vesp')->default('');
            $table->integer('id_user')->default(0);
            $table->string('username')->default('');
            $table->integer('id_status')->default(1);
            $table->integer('created_by')->default(1);
            $table->integer('updated_by')->default(1);
            $table->datetime('created_at')->default('1900-01-01');
            $table->datetime('updated_at')->default('1900-01-01');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_reservations');
    }
}
