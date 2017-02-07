<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'comment_id', 'article_id', 'data', 'read',
    ];

    public function scopeRead($query)
    {
        $query->where('read', 1);
    }

    public function scopeUnread($query)
    {
        $query->where('read', 0);
    }
}
