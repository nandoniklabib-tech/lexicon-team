<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWritingAnswer extends Model
{
    use HasFactory;
     protected $fillable = [
        'test_user_id',
        'section_id',
        'question_group_id',
        'answer_text',
    ];

    // Relationships (optional but useful)
    public function testUser()
    {
        return $this->belongsTo(TestUser::class, 'test_user_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function questionGroup()
    {
        return $this->belongsTo(QuestionGroup::class, 'question_group_id');
    }
}
