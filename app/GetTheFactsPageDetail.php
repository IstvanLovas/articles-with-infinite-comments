<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetTheFactsPageDetail extends Model
{
    protected $fillable = [
    	'banner_background_image_path',
    	'banner_background_image_path_thumbnail',
    	'banner_header',
    	'banner_subheader',
    	'the_issue_header',
    	'the_issue_subheader',
    	'the_issue_text_left',
    	'the_issue_text_right',
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
    	'why_us_header',
    	'why_us_subheader',
    	'why_us_text',
    	'why_us_list',
    ];
}
