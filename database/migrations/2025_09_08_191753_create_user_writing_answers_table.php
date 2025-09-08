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
        Schema::create('user_writing_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_user_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('question_group_id');
            $table->longText('answer_text'); 
            $table->timestamps();

            $table->foreign('test_user_id')->references('id')->on('test_users')->onDelete('cascade');

            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            
            $table->foreign('question_group_id')->references('id')->on('question_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_writing_answers');
    }
};
