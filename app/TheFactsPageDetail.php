<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheFactsPageDetail extends Model
{
    protected $fillable = [
    	'banner_background_image_path',
    	'banner_background_image_path_thumbnail',
    	'banner_header',
    	'why_this_matters_header',
        'why_this_matters_subheader',
        'why_this_matters_lead',
        'why_this_matters_text_left',
        'why_this_matters_text_right',
    	'key_fact_1_header',
    	'key_fact_1_number',
    	'key_fact_1_image',
    	'key_fact_2_header',
    	'key_fact_2_number',
    	'key_fact_2_image',
    	'key_fact_3_header',
    	'key_fact_3_number',
    	'key_fact_3_image',
    	'our_aims_header',
    	'our_aims_subheader',
    	'our_aims_1_text',
    	'our_aims_1_image_path',
    	'our_aims_2_text',
    	'our_aims_2_image_path',
    	'our_aims_3_text',
    	'our_aims_3_image_path',
    	'our_aims_4_text',
    	'our_aims_4_image_path',
    	'our_curren_challenge_header',
    	'our_curren_challenge_header_text_left',
    	'our_curren_challenge_header_text_right',
    	'fact',
        'fact_bold',
    	'why_us_header',
    	'why_us_subheader',
    	'why_us_text',
    	'why_us_list',
    ];
}