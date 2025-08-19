<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lexifly extends Model
{
    use HasFactory;    
    public function lexiflycountry(){
        return $this->belongsTo(LexiflyCountry::class);
    }
}
