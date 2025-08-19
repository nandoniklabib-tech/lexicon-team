<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question_group_id', 'text', 'type', 'order_no', 'meta_data'];

    protected $casts = [
        'meta_data' => 'array', // For table config, gaps, etc.
    ];

    public function group()
    {
        return $this->belongsTo(QuestionGroup::class, 'question_group_id');
    }

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }
}
