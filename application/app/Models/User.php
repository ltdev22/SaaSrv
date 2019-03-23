<?php

namespace SaaSrv\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use SaaSrv\Models\Traits\HasSubscriptions;
use SaaSrv\Models\Traits\HasConfirmationTokens;
use SaaSrv\Models\Traits\HasTwoFactorAuthentication;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable,
        HasConfirmationTokens,
        HasSubscriptions,
        Billable,
        SoftDeletes,
        HasTwoFactorAuthentication;

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
        'password',
        'remember_token',
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
     * A user should have one team.
     *
     * @return $this
     */
    public function team()
    {
        return $this->hasOne(\SaaSrv\Models\Team::class);
    }

    /**
     * A user can belong to many teams.
     *
     * @return $this
     */
    public function teams()
    {
        return $this->belongsToMany(\SaaSrv\Models\Team::class)->withTimestamps();
    }

    /**
     * Assocciate user with plans.
     *
     * hasMany      Plans
     * Through      Subscriptions
     *
     * ForeignKeys
     * user_id      relates to `subscriptions`.`user_id`
     * gateway_id   relates to `plans`.`gateway_id`
     * id           relates to `users`.`id` and also matches `subscriptions`.`user_id`
     * stripe_plan  relates to `subscriptions`.`stripe_plan`
     *
     * @return $this
     */
    public function plans()
    {
        return $this->hasManyThrough(
            \SaaSrv\Models\Plan::class,
            \Laravel\Cashier\Subscription::class,
            'user_id',
            'gateway_id',
            'id',
            'stripe_plan'
        )->orderBy('subscriptions.created_at', 'desc');
    }

    /**
     * Typically we would have one subscription to a specific plan,
     * so we want to get user's last subscription plan which is the first on the list
     * since we are sorting them by desc order
     *
     * @see \Saasy\Models\User::plans()
     * @return $this
     */
    public function plan()
    {
        return $this->plans()->first();
    }

    /**
     * Return $this->plan() accessing as a property
     *
     * @see \Saasy\Models\User::plan()
     * @return $this
     */
    public function getPlanAttribute()
    {
        return $this->plan();
    }

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
     * Has the user been deactivated (soft deleted)?
     *
     * @return bool
     */
    public function isDeactivated(): bool
    {
        return !is_null($this->deleted_at);
    }

    /**
     * Has the user not been deactivated (not soft deleted)?
     *
     * @return bool
     */
    public function isNotDeactivated(): bool
    {
        return !$this->isDeactivated();
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
