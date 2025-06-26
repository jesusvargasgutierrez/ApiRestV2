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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname')->default('');
            $table->string('lname')->default('');
            $table->string('company')->default('');
            $table->string('country')->default('');
            $table->integer('gender')->default(0);
            $table->string('username')->default('');
            $table->string('email')->default('');
            $table->string('phone')->default('');
            $table->date('birthday')->default('1900-01-01');
            $table->string('password');
            $table->integer('id_status')->default(1);
            $table->boolean('active')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
