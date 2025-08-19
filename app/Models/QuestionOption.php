<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $fillable = ['question_id', 'text', 'row_index', 'col_index', 'is_correct'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
