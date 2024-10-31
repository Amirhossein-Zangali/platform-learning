<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $guarded = [];

    static public function isUserCourse($id)
    {
        $course = Course::find($id);
        return $course->user_id == auth()->id();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
