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
        Schema::create('test_writings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('test_id')->nullable();
            $table->string('answer1')->nullable();
            $table->string('mark1')->nullable();
            $table->string('answer2')->nullable();
            $table->string('mark2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_writings');
    }
};
