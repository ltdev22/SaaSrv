<?php

namespace SaaSrv\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * A team should owned by a user.
     *
     * @return $this
     */
    public function owner()
    {
        return $this->belongsTo(\SaaSrv\Models\User::class, 'user_id');
    }
}
