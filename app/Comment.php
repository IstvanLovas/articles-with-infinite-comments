<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'text'
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

    public function newCollection(array $models = [])
    {
        return new CommentCollection($models);
    }
}
