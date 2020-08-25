<?php

namespace App\Listeners;

use App\Mail\NewSubscriptionNewsletterByVisitor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewSubscriptionNewsletterByVisitorListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->contactForm->email)->send(new NewSubscriptionNewsletterByVisitor());
    }
}
