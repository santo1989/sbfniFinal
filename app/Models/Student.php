<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }


    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function gradeCategories()
    {
        return $this->hasMany(GradeCategory::class);
    }

    public function markDestributions()
    {
        return $this->hasMany(MarkDestribution::class);
    }

    public function markInputs()
    {
        return $this->hasMany(MarkInput::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
