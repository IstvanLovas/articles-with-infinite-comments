<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('welcome_page_details')->insert([
        	'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "Text",
            'banner_subheader' => "Text",
            'fact' => "Fact",
            'the_issue_header' => "Text",
            'the_issue_subheader' => "Text",
            'the_issue_text_left' => "Text",
            'the_issue_text_right' => "Text",
            'why_it_matters_header' => "Text",
            'why_it_matters_subheader' => "Text",
            'why_it_matters_text' => "Text",
            'why_it_matters_fact' => "Text",
            'our_goals_header' => "Text",
            'our_goals_subheader' => "Text",
            'our_goals_goal_1' => "Text",
            'our_goals_goal_2' => "Text",
            'our_goals_goal_3' => "Text",
        ]);

        DB::table('get_the_facts_page_details')->insert([
        	'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "Text",
            'banner_subheader' => "Text",
            'the_issue_header' => "Text",
            'the_issue_subheader' => "Text",
            'the_issue_text_left' => "Text",
            'the_issue_text_right' => "Text",
            'key_fact_1_header' => "Text",
            'key_fact_1_number' => 2345,
            'key_fact_2_header' => "Text",
            'key_fact_2_number' => 2345,
            'key_fact_3_header' => "Text",
            'key_fact_3_number' => 2345,
            'our_aims_header' => "Text",
            'our_aims_subheader' => "Text",
            'our_aims_1_text' => "Text",
            'our_aims_1_image_path' => "Text",
            'our_aims_2_text' => "Text",
            'our_aims_2_image_path' => "Text",
            'our_aims_3_text' => "Text",
            'our_aims_3_image_path' => "Text",
            'our_aims_4_text' => "Text",
            'our_aims_4_image_path' => "Text",
            'our_current_challenge_header' => "Text",
            'our_current_challenge_text_left' => "Text",
            'our_current_challenge_text_right' => "Text",
            'fact' => "Fact",
            'why_us_header' => "Text",
            'why_us_subheader' => "Text",
            'why_us_text' => "Text",
            'why_us_list'=> "Text"
        ]);

        DB::table('meet_those_most_impacted_page_details')->insert([
            'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "Text",
            'banner_subheader' => "Text",
            'the_impact_is_huge_header' => "Text",
            'the_impact_is_huge_subheader' => "Text",
            'the_impact_is_huge_text_left' => "Text",
            'the_impact_is_huge_text_right' => "Text",
            'fact' => "Fact",
        ]);
    }
}
