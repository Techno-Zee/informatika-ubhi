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
            $table->foreignId('user_id')->constrained('users')->ondelete('cascade');
            $table->string('nim',30)->unique();
            $table->foreignId('class_room_id')->constrained('class_rooms')->ondelete('cascade');
            $table->integer('school_year');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('status', ['active', 'on_lave', 'graduated' , 'inactive'])->default('active');
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
