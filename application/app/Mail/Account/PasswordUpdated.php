<?php

namespace SaaSrv\Mail\Account;

use SaaSrv\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PasswordUpdated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var User
     */
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@saasrv.com')
                    ->subject('Account activity: Passowrd updated')
                    ->markdown('emails.account.password.updated');
    }
}
