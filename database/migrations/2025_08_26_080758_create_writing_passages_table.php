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
        Schema::create('writing_passages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_group_id')
                  ->constrained('question_groups')
                  ->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->longText('content'); // store passage text, can be HTML
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writing_passages');
    }
};


