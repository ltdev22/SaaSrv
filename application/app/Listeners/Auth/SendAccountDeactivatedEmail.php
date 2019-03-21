<?php

namespace SaaSrv\Listeners\Auth;

use SaaSrv\Mail\Auth\DeactivationEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAccountDeactivatedEmail implements ShouldQueue
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
            new DeactivationEmail($event->user)
        );
    }
}
