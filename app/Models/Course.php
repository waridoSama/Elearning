<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'course_description',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_courses');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_courses');
    }
}
