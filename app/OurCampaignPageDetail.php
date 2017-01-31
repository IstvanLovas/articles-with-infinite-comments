<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurCampaignPageDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
    	'banner_background_image_path',
    	'banner_background_image_path_thumbnail',
    	'banner_header',
    	'banner_subheader',
    	'fact',
        'fact_bold',
    	'the_issue_header',
    	'the_issue_subheader',
    	'the_issue_text_left',
    	'the_issue_text_right',
    	'why_it_matters_header',
    	'why_it_matters_subheader',
    	'why_it_matters_text',
    	'why_it_matters_fact',
    	'why_it_matters_image_thumbnail',
    	'why_it_matters_image_path_thumbnail',
    	'our_goals_header',
    	'our_goals_subheader',
    	'our_goals_goal_1',
    	'our_goals_goal_2',
    	'our_goals_goal_3',
    ];
}
