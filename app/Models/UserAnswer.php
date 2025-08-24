<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_user_id',
        'mock_test_id',
        'section_id',
        'question_id',
        'option_id',
        'question_no',
        'answer_text',
    ];

    // Relationships
    public function testUser()
    {
        return $this->belongsTo(TestUser::class, 'test_user_id');
    }

    public function mocktestUser()
    {
        return $this->belongsTo(MockTest::class, 'mock_test_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function option()
    {
        return $this->belongsTo(QuestionOption::class, 'option_id');
    }
}
