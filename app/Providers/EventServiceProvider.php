<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \App\Events\CourseRegistered::class => [
            \App\Listeners\SendCourseRegistrationEmail::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
