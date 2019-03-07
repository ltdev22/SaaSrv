<?php

namespace SaaSrv\Models;

use Illuminate\Database\Eloquent\Model;

class ConfirmationToken extends Model
{
    /**
     * Remove default timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Set custom timestamps as Carbon instances.
     *
     * @var array
     */
    protected $dates = [
        'expires_at',
    ];

    /**
     * Define  any mass assigned attributes.
     *
     * @var array
     */
    protected $fillable = [
        'token',
        'expires_at',
    ];

    /**
     * A user owns a confirmation token.
     *
     * @return $this
     */
    public function user()
    {
        return $this->belongsTo(\SaaSrv\Models\User::class);
    }

    /**
     * Return the name of the column we are going to use for route model binding.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'token';
    }

    /**
     * Has the token expired?
     *
     * @return bool
     */
    public function hasExpired(): bool
    {
        // Check if current timestamp (which is a Carbon instance) 
        // is greater than expires_at.
        return $this->freshTimestamp()->gt($this->expires_at);
    }

    /**
     * Delete user's old token before generating a new one.
     *
     * @return void
     */
    public static function boot()
    {
        static::creating(function ($token) {
            // We use the optonal helper because the user might not have a token already
            // so we can't delete on .. null basically.
            optional($token->user->confirmationToken)->delete();
        });
    }
}
