<?php

namespace App\Listeners;

use App\Events\CourseRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogCourseRegistered
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CourseRegistered $event): void
    {
        Log::info("User registered for course: user_id = {$event->user->id}, course_id = {$event->course->id}");
    }
}
