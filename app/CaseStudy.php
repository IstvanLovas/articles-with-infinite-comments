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
    	'text-left',
    	'text-right',
    	'image_path'
    ];
}
