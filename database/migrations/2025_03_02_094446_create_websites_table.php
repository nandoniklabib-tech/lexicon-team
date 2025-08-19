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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('moile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->text('address')->nullable();
            $table->string('who_we_are_image')->nullable();
            $table->text('who_we_are_description')->nullable();
            $table->string('vision_image')->nullable();
            $table->text('vision_description')->nullable();
            $table->string('mission_image')->nullable();
            $table->text('mission_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
