<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function markDestribution()
    {
        return $this->hasMany(MarkDestribution::class);
    }

    public function gradeCategory()
    {
        return $this->belongsTo(GradeCategory::class);
    }

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    
}
