<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['course_id', 'name', 'free'];
    
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
