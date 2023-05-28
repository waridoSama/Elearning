<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher_courses extends Model
{
    use HasFactory;
    protected $table = 'teacher_courses';
    public $timestamps = false;

    protected $fillable = [
        'teacher_id',
        'course_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
