<?php

namespace SaaSrv\Models\Traits;

trait HasRoles
{
    /**
     * A user has many roles.
     *
     * @return $this
     */
    public function roles()
    {
        return $this->belongsToMany(\SaaSrv\Models\Role::class);
    }

    /**
     * Check if the user has a specific role.
     *
     * @param  string    $role
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        return $this->roles->contains('name', strtolower($role));
    }
}