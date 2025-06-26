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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->default('');
            $table->string('number_member')->default('');
            $table->datetime('datebirthday')->default('1900-01-01');
            $table->string('email')->default('');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('photoprofile')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('address')->nullable();
            $table->string('colony')->nullable();
            $table->string('id_status')->nullable();
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
        Schema::dropIfExists('members');
    }
};
