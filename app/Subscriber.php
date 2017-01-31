<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    public function updateSubscription($input)
    {
    	$this->notify = $input === null ? 0 : 1;
    	$this->save();
    }
}
