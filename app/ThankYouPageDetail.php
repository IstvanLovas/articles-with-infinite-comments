<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThankYouPageDetail extends Model
{
    protected $fillable = [
    	'banner_background_image_path',
    	'banner_background_image_path_thumbnail',
    	'banner_header',
    	'banner_subheader',
    	'but_it_does_not_stop_there_header',
    	'but_it_does_not_stop_there_sign',
    	'but_it_does_not_stop_there_text',
    ];
}
