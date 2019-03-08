<?php

namespace SaaSrv\Listeners\Auth;

use SaaSrv\Mail\Auth\ActivationEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendActivationEmail //implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        \Mail::to($event->user)->send(
            new ActivationEmail($event->user)
        );
    }
}
