<?php

namespace SaaSrv\Models;

use Illuminate\Database\Eloquent\Model;

class TwoFactor extends Model
{
    /**
     * Specify the name of the database table 
     * because its not following the default convension.
     *
     * @var string
     */
    protected $table = 'two_factor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone',
        'dial_code',
        'identifier',
        'verified_at',
    ];

    /**
     * Set custom timestamps as Carbon instances.
     *
     * @var array
     */
    protected $dates = [
        'verified_at',
    ];

    /**
     * A user has two factor.
     *
     * @return $this
     */
    public function user()
    {
        return $this->belongsTo(\SaaSrv\Models\User::class);
    }

    /**
     * Has the user verified the twoFactor?
     *
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->verified_at instanceof \Carbon\Carbon;
    }

    /**
     * Delete user's old two factor before generating a new one.
     *
     * @return void
     */
    public static function boot()
    {
        static::creating(function ($twoFactor) {
            // We use the optonal helper because the user might not have a twoFactor already
            // so we can't delete on .. null basically.
            optional($twoFactor->user->twoFactor)->delete();
        });
    }
}
