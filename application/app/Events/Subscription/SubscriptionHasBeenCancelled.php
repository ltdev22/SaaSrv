<?php

namespace SaaSrv\Events\Subscription;

use SaaSrv\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class SubscriptionHasBeenCancelled
{
    use Dispatchable, SerializesModels;

    /**
     * The user instence
     *
     * @var User
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
