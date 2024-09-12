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

        Schema::create('group_has_material', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->bigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_has_material');
    }
};
