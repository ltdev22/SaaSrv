<?php

namespace SaaSrv\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use SaaSrv\Models\Traits\HasConfirmationTokens;

class User extends Authenticatable
{
    use Notifiable,
        HasConfirmationTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'activated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Set custom timestamps as Carbon instances.
     *
     * @var array
     */
    protected $dates = [
        'activated_at',
    ];

    /**
     * Has the user been activated?
     *
     * @return bool
     */
    public function hasBeenActivated(): bool
    {
        return !is_null($this->activated_at);
    }

    /**
     * Has the user not been activated?
     *
     * @return bool
     */
    public function hasNotBeenActivated(): bool
    {
        return !$this->hasBeenActivated();
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new \SaaSrv\Notifications\MailResetPasswordNotification($token));
    }
}
