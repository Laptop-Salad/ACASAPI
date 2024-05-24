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
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('student_id')->references('id')->on('students')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('teacher_id')->references('id')->on('teachers')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('points');
            $table->string('type');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('points');
    }
};
