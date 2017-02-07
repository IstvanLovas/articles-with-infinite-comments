<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
    	'title',
        'lead',
    	'body',
    	'published_at'
    ];

    protected $dates = ['published_at'];

    public function getComments()
    {
        return $this->comments()->approved()->with('user')->get()->threaded();
    }

    /**
     * An article is owned by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    /**
     * An article has many comments
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the tags with the associated article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the list of tag ids associated with the current article
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags->pluck('id')->all();
    }

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }

    public function addComment($request)
    {
        $comment = $this->comments()->create([
            'text' => request('text'),
            'emoji' => request('emoji'),
            'user_id' => $request->user()->id,
            'parent_id' => request('parent_id', null)
        ]);

        return $comment;
    }
}
