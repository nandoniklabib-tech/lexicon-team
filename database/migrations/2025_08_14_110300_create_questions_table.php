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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_group_id');
            $table->text('text'); // The question or sentence
            $table->enum('type', [
                'mcq', 'fill_blank', 'multi_select', 'checkbox',
                'table', 'true_false'
            ]);
            $table->integer('order_no')->default(1);
            $table->json('meta_data')->nullable(); // For table column names, gap positions, etc.
            $table->timestamps();

            $table->foreign('question_group_id')
                ->references('id')
                ->on('question_groups')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
