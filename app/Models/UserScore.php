<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    use HasFactory;
     protected $fillable = [
        'test_user_id',
        'section_id',
        'result'
    ];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
