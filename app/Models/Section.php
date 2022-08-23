<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function gradeCategories()
    {
        return $this->hasMany(GradeCategory::class);
    }

    public function markDestributions()
    {
        return $this->hasMany(MarkDestribution::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }   

    public function markInputs()
    {
        return $this->hasMany(MarkInput::class);
    }   

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    
}
