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
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_exp_date')->nullable();
            $table->string('nid')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('occupation')->nullable();
            $table->string('country_for_apply')->nullable();
            $table->string('year_studied_english')->nullable();
            $table->string('test_type')->nullable();
            $table->string('test_date')->nullable();
            $table->string('test_venue')->nullable();
            $table->string('test_format')->nullable();
            $table->string('passport_nid_image')->nullable();
            $table->text('why_enroll_course')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placements');
    }
};
