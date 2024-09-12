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

        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tester_id');
            $table->foreign('tester_id')->references('id')->on('users');
            $table->bigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->bigInteger('score');
            $table->enum('result', [""]);
            $table->date('date');
            $table->bigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->tinyInteger('juz');
            $table->text('certificate')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
