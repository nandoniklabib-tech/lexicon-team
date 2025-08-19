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
        Schema::create('test_listenings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',2)->nullable();
            $table->string('test_id',2)->nullable();
            
            $table->string('answer1',155)->nullable();
            $table->string('mark1',2)->nullable();
            
            $table->string('answer2',155)->nullable();
            $table->string('mark2',2)->nullable();
            
            $table->string('answer3',155)->nullable();
            $table->string('mark3',2)->nullable();
            
            $table->string('answer4',155)->nullable();
            $table->string('mark4',2)->nullable();
            
            $table->string('answer5',155)->nullable();
            $table->string('mark5',2)->nullable();
            
            $table->string('answer6',155)->nullable();
            $table->string('mark6',2)->nullable();
            
            $table->string('answer7',155)->nullable();
            $table->string('mark7',2)->nullable();
            
            $table->string('answer8',155)->nullable();
            $table->string('mark8',2)->nullable();
            
            $table->string('answer9',155)->nullable();
            $table->string('mark9',2)->nullable();
            
            $table->string('answer10',155)->nullable();
            $table->string('mark10',2)->nullable();
            
            $table->string('answer11',155)->nullable();
            $table->string('mark11',2)->nullable();
            
            $table->string('answer12',155)->nullable();
            $table->string('mark12',2)->nullable();
            
            $table->string('answer13',155)->nullable();
            $table->string('mark13',2)->nullable();
            
            $table->string('answer14',155)->nullable();
            $table->string('mark14',2)->nullable();
            
            $table->string('answer15',155)->nullable();
            $table->string('mark15',2)->nullable();
            
            $table->string('answer16',155)->nullable();
            $table->string('mark16',2)->nullable();
            
            $table->string('answer17',155)->nullable();
            $table->string('mark17',2)->nullable();
            
            $table->string('answer18',155)->nullable();
            $table->string('mark18',2)->nullable();
            
            $table->string('answer19',155)->nullable();
            $table->string('mark19',2)->nullable();
            
            $table->string('answer20',155)->nullable();
            $table->string('mark20',2)->nullable();
            
            $table->string('answer21',155)->nullable();
            $table->string('mark21',2)->nullable();
            
            $table->string('answer22',155)->nullable();
            $table->string('mark22',2)->nullable();
            
            $table->string('answer23',155)->nullable();
            $table->string('mark23',2)->nullable();
            
            $table->string('answer24',155)->nullable();
            $table->string('mark24',2)->nullable();
            
            $table->string('answer25',155)->nullable();
            $table->string('mark25',2)->nullable();
            
            $table->string('answer26',155)->nullable();
            $table->string('mark26',2)->nullable();
            
            $table->string('answer27',155)->nullable();
            $table->string('mark27',2)->nullable();
            
            $table->string('answer28',155)->nullable();
            $table->string('mark28',2)->nullable();
            
            $table->string('answer29',155)->nullable();
            $table->string('mark29',2)->nullable();
            
            $table->string('answer30',155)->nullable();
            $table->string('mark30',2)->nullable();
            
            $table->string('answer31',155)->nullable();
            $table->string('mark31',2)->nullable();
            
            $table->string('answer32',155)->nullable();
            $table->string('mark32',2)->nullable();
            
            $table->string('answer33',155)->nullable();
            $table->string('mark33',2)->nullable();
            
            $table->string('answer34',155)->nullable();
            $table->string('mark34',2)->nullable();
            
            $table->string('answer35',155)->nullable();
            $table->string('mark35',2)->nullable();
            
            $table->string('answer36',155)->nullable();
            $table->string('mark36',2)->nullable();
            
            $table->string('answer37',155)->nullable();
            $table->string('mark37',2)->nullable();
            
            $table->string('answer38',155)->nullable();
            $table->string('mark38',2)->nullable();
            
            $table->string('answer39',155)->nullable();
            $table->string('mark39',2)->nullable();
            
            $table->string('answer40',155)->nullable();
            $table->string('mark40',2)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_listenings');
    }
};
