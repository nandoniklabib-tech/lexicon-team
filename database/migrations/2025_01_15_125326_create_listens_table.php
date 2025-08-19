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
        Schema::create('listens', function (Blueprint $table) {
            $table->id();
            $table->string('course_id')->nullable();
            
            $table->string('lq1')->nullable();
            $table->string('la1',20)->nullable();
            
            $table->string('lq2')->nullable();
            $table->string('la2',20)->nullable();
            
            $table->string('lq3')->nullable();
            $table->string('la3',20)->nullable();
            
            $table->string('lq4')->nullable();
            $table->string('la4',20)->nullable();
            
            $table->string('lq5')->nullable();
            $table->string('la5',20)->nullable();
            
            $table->string('lq6')->nullable();
            $table->string('la6',20)->nullable();
            
            $table->string('lq7')->nullable();
            $table->string('la7',20)->nullable();
            
            $table->string('lq8')->nullable();
            $table->string('la8',20)->nullable();
            
            $table->string('lq9')->nullable();
            $table->string('la9',20)->nullable();
            
            $table->string('lq10')->nullable();
            $table->string('la10',20)->nullable();
            
            $table->string('lq11')->nullable();
            $table->string('la11',20)->nullable();
            
            $table->string('lq12')->nullable();
            $table->string('la12',20)->nullable();
            
            $table->string('lq13')->nullable();
            $table->string('la13',20)->nullable();
            
            $table->string('lq14')->nullable();
            $table->string('la14',20)->nullable();
            
            $table->string('lq15')->nullable();
            $table->string('la15',20)->nullable();
            
            $table->string('lq16')->nullable();
            $table->string('la16',20)->nullable();
            
            $table->string('lq17')->nullable();
            $table->string('la17',20)->nullable();
            
            $table->string('lq18')->nullable();
            $table->string('la18',20)->nullable();
            
            $table->string('lq19')->nullable();
            $table->string('la19',20)->nullable();
            
            $table->string('lq20')->nullable();
            $table->string('la20',20)->nullable();
            
            $table->string('lq21')->nullable();
            $table->string('la21',20)->nullable();
            
            $table->string('lq22')->nullable();
            $table->string('la22',20)->nullable();
            
            $table->string('lq23')->nullable();
            $table->string('la23',20)->nullable();
            
            $table->string('lq24')->nullable();
            $table->string('la24',20)->nullable();
            
            $table->string('lq25')->nullable();
            $table->string('la25',20)->nullable();
            
            $table->string('lq26')->nullable();
            $table->string('la26',20)->nullable();
            
            $table->string('lq27')->nullable();
            $table->string('la27',20)->nullable();
            
            $table->string('lq28')->nullable();
            $table->string('la28',20)->nullable();
            
            $table->string('lq29')->nullable();
            $table->string('la29',20)->nullable();
            
            $table->string('lq30')->nullable();
            $table->string('la30',20)->nullable();
            
            $table->string('lq31')->nullable();
            $table->string('lq31o1',20)->nullable();
            $table->string('lq31o2',20)->nullable();
            $table->string('lq31o3',20)->nullable();
            $table->string('la31',20)->nullable();
            
            $table->string('lq32')->nullable();
            $table->string('lq32o1',20)->nullable();
            $table->string('lq32o2',20)->nullable();
            $table->string('lq32o3',20)->nullable();
            $table->string('la32',20)->nullable();
            
            $table->string('lq33')->nullable();
            $table->string('lq33o1',20)->nullable();
            $table->string('lq33o2',20)->nullable();
            $table->string('lq33o3',20)->nullable();
            $table->string('la33',20)->nullable();
            
            $table->string('lq34')->nullable();
            $table->string('la34',20)->nullable();
            
            $table->string('lq35')->nullable();
            $table->string('la35',20)->nullable();
            
            $table->string('lq36')->nullable();
            $table->string('la36',20)->nullable();
            
            $table->string('lq37')->nullable();
            $table->string('la37',20)->nullable();
            
            $table->string('lq38')->nullable();
            $table->string('la38',20)->nullable();
            
            $table->string('lq39')->nullable();
            $table->string('la39',20)->nullable();
            
            $table->string('lq40')->nullable();
            $table->string('la40',20)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listens');
    }
};
