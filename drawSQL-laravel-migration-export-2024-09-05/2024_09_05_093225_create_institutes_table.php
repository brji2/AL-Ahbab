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
        Schema::disableForeignKeyConstraints();

        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->tinyInteger('location');
            $table->bigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('users');
            $table->bigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutes');
    }
};
