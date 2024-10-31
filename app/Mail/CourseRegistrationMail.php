<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $course;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($course, $user)
    {
        $this->course = $course;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ثبت نام جدید در دوره شما')
            ->view('emails.course_registration');
    }
}
