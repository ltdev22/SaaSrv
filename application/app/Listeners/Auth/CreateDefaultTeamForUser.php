<?php

namespace SaaSrv\Listeners\Auth;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateDefaultTeamForUser
{
    /**
     * When a user signs up by default is creating and owning a team 
     * no matter if he is just a member or not.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->team()->create([
            'name' => $event->user->name . ' team',
        ]);
    }
}
