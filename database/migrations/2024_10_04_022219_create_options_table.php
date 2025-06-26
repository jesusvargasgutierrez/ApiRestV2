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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('description')->default('');
            $table->string('url_img')->default('');
            $table->string('url_route')->default('');
            $table->integer('id_status')->default(1);
            $table->integer('created_by')->default(1);
            $table->integer('updated_by')->default(1);
            $table->datetime('created_at')->default('1900-01-01');
            $table->datetime('updated_at')->default('1900-01-01');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
