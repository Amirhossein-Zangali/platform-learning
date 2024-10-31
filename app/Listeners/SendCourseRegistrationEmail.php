<?php

namespace App\Listeners;

use App\Events\CourseRegistered;
use App\Jobs\SendEmailJob;

class SendCourseRegistrationEmail
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\CourseRegistered  $event
     * @return void
     */
    public function handle(CourseRegistered $event)
    {
        SendEmailJob::dispatch($event->course, $event->user);
    }
}
