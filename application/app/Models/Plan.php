<?php

namespace SaaSrv\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Plan extends Model
{
    /**
     * Remove default timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'information' => 'array',
    ];

    /**
     * Filter only active plans
     *
     * @param  \Illuminate\Database\Eloquent\Builder    $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('active', true);
    }

    /**
     * Filter exclude current user's plan
     *
     * @param  \Illuminate\Database\Eloquent\Builder    $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeExceptCurrent(Builder $query): Builder
    {
        return $query->except(
            auth()->user()->plan->id
        );
    }

    /**
     * Filter exclude specific plan
     *
     * @param  \Illuminate\Database\Eloquent\Builder    $query
     * @param  int                                      $plan_id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeExcept(Builder $query, int $plan_id): Builder
    {
        return $query->where('id', '!=' , $plan_id);
    }

    /**
     * Filter only member plans
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForMembers(Builder $query): Builder
    {
        return $query->where('teams_enabled', false);
    }

    /**
     * Filter only team plans
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForTeams(Builder $query): Builder
    {
        return $query->where('teams_enabled', true);
    }

    /**
     * Is this a team plan?
     *
     * @return bool
     */
    public function isForTeams(): bool
    {
        return $this->teams_enabled;
    }
}
