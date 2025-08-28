<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockTest extends Model
{
    protected $fillable = ['title', 'description'];

    public $timestamps = true;

    public function sections()
    {
        return $this->hasMany(Section::class, 'mock_test_id', 'id');
    }
    public function testUser()
    {
        return $this->hasMany(TestUser::class, 'mock_test_id', 'id');
    }
}
