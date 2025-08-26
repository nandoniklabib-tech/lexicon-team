<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingPassage extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_group_id',
        'title',
        'content',
    ];
}
