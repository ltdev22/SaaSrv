<?php

namespace SaaSrv\Mail\Auth;

use SaaSrv\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var User
     */
    public $user;

    /**
     * The generated confirmation token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a new message instance.
     *
     * @param \SaaSrv\Models\User   $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->token = $user->generateConfirmationToken();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hello@saasrv.dev')
                    ->subject('Activate your account')
                    ->markdown('emails.auth.activation');
    }
}
