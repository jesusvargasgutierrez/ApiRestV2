<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('description')->default('');
            $table->integer('id_origin')->default(0);
            $table->integer('id_module')->default(0);
            $table->string('image_name')->default('');
            $table->text('url');
            $table->text('route_url');
            $table->string('id_status')->default(1);
            $table->integer('created_by')->default('1');
            $table->integer('updated_by')->default('1');
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
        Schema::dropIfExists('images');
    }
}
