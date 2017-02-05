<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
    	'text', 'approved', 'user_id', 'parent_id'
    ];

    /**
     * A comment is owned by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A comment belongs to an article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

    public function scopeApproved($query)
    {
        $query->where('approved', '=', 1);
    }

    public function scopeUnapproved($query)
    {
        $query->where('approved', '=', 0);
    }

    public function newCollection(array $models = [])
    {
        return new CommentCollection($models);
    }
}
