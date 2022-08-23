<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Teacher;

class CurrentCourse extends Model
{
    use HasFactory;
    protected $table = "currentcourses";
    protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
