<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('school_users', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('school_id')->references('id')->on('schools')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('school_users');
    }
};
