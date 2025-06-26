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
        Schema::create('checkoutmembers', function (Blueprint $table) {
            $table->id();
            $table->integer('id_member')->default(0);
            $table->integer('id_payment')->default(0);
            $table->string('date_payment')->default('');
            $table->string('number_card')->default('');
            $table->string('day')->default('');
            $table->string('month')->default('');
            $table->string('year')->default('');
            $table->string('cvv')->default('');
            $table->string('type_card')->default('');
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
        Schema::dropIfExists('checkoutmembers');
    }
};
