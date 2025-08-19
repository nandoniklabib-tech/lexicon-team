<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['mock_test_id', 'name', 'order_no', 'duration'];

    public $timestamps = true;

    // Relationship: A section belongs to a mock test
    public function mockTest()
    {
        return $this->belongsTo(MockTest::class);
    }
    public function questionGroups()
    {
        return $this->hasMany(QuestionGroup::class);
    }
}
