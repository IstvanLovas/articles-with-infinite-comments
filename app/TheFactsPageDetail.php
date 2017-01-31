<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheFactsPageDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
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
    	'our_progress_header',
    	'our_progress_subheader',
    	'our_progress_1_text',
    	'our_progress_1_image_path',
    	'our_progress_2_text',
    	'our_progress_2_image_path',
    	'our_progress_3_text',
    	'our_progress_3_image_path',
    	'our_progress_4_text',
    	'our_progress_4_image_path',
    	'our_current_challenge_header',
        'our_current_challenge_subheader',
        'our_current_challenge_lead',
    	'our_current_challenge_text_left',
    	'our_current_challenge_text_right',
    	'fact',
        'fact_bold',
    	'why_us_header',
    	'why_us_subheader',
    	'why_us_text',
    	'why_us_list',
    ];
}
