<?php

namespace SaaSrv\Listeners\Subscription;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use SaaSrv\Mail\Subscription\CancelSubscriptionEmail;

class SendCancellationEmail implements ShouldQueue
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
            new CancelSubscriptionEmail($event->user)
        );
    }
}
