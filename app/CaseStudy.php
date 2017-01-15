<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $fillable = [
    	'name',
    	'header',
    	'intro',
    	'fact',
    	'text_left',
    	'text_right',
    	'image_path',
    	'active'
    ];
}
