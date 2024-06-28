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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('roll_number')->nullable();
            $table->string('blood_group');
            $table->string('religion');
            $table->string('email')->unique();
            $table->string('class');
            $table->string('section');
            $table->string('admission_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
