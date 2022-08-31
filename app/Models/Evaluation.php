<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function currentcourse(){
        return $this->belongsTo(CurrentCourse::class, 'currentcourse_id');
    }
}
