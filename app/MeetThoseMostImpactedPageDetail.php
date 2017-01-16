<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetThoseMostImpactedPageDetail extends Model
{
    protected $fillable = [
    	'banner_background_image_path',
    	'banner_background_image_path_thumbnail',
    	'banner_header',
    	'banner_subheader',
    	'the_impact_is_huge_header',
    	'the_impact_is_huge_subheader',
    	'the_impact_is_huge_text_left',
    	'the_impact_is_huge_text_right',
    	'fact',
        'fact_bold',
    ];
}
