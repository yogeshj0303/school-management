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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->unique();
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('mobile');
            $table->date('joining_date');
            $table->string('qualification');
            $table->string('experience');
            $table->string('subject');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
