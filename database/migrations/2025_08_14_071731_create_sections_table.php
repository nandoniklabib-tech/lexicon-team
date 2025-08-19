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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mock_test_id');
            $table->string('name'); // Listening, Reading, Writing
            $table->integer('order_no');
            $table->integer('duration'); // in minutes
            $table->timestamps();
        
            $table->foreign('mock_test_id')
                  ->references('id')
                  ->on('mock_tests')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};



