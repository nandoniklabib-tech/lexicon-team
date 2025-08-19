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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->nullable();
            $table->string('heading')->nullable();
            $table->string('sub_heading')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('start_date')->nullable();
            $table->string('class_schedule')->nullable();
            $table->string('support')->nullable();
            $table->string('seats')->nullable();
            $table->string('batch_name')->nullable();
            $table->string('extra_title')->nullable();
            $table->text('extra_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
