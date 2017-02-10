<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider',
        'provider_id',
        'avatar'
    ];

    /**
     * A social account belongs to a user
     * @return Illuminate\Database\Eloquent\Relationships\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
