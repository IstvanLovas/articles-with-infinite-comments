<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivacyPolicyPageDetail extends Model
{
	/**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
    	'banner_background_image_path',
    	'banner_background_image_path_thumbnail',
    	'banner_header',
    	'privacy_policy_header',
    	'privacy_policy_text_left',
    	'privacy_policy_text_right',
    ];
}
