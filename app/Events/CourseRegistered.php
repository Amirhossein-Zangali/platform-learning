<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CourseRegistered
{
    use Dispatchable, SerializesModels;

    public $course;
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($course, $user)
    {
        $this->course = $course;
        $this->user = $user;
    }
}
