<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $table = 'alumnis';
    public function year()
    {
        return $this->belongsTo('App\Models\Year');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    
}
