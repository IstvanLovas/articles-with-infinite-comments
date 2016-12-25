<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * A user may have a role
     * @return Illuminate\Database\Eloquent\Relationships\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * A user can have many articles
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * A user can have many comments
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    /**
     * Check if the user has a role assigned
     * @param  string  $role
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }
    }

    /**
     * Assign role to a user
     * @param  string  $role
     * @return boolean
     */
    public function assignRole($role)
    {
        if (is_string($role)) {
            return $this->roles()->attach($role);
        }
    }

    /**
     * Remove role from a user
     * @param  string  $role
     * @return boolean
     */
    public function removeRole($role)
    {
        if (is_string($role)) {
            return $this->roles()->detach($role);
        }
    }

    public function owns($relation)
    {
        return $relation->user_id == $this->id;
    }
}
