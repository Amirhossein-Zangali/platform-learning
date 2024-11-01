<?php

namespace App\Listeners;

use App\Events\CourseViewed;
use Illuminate\Support\Facades\Log;

class LogCourseViewed
{
    public function handle(CourseViewed $event)
    {
        Log::info("User viewed course: user_id = {$event->user->id}, course_id = {$event->course->id}");
    }
}
