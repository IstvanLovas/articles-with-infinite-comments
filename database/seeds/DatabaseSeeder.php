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
            'banner_header' => "Created by Parents",
            'banner_subheader' => "Fighting for families of complex individuals.",
            'fact' => "75% of 'Outstanding' rated homes have 6+ beds which new CQC rules now imply are not fit for purpose.",
            'fact_bold' => "We don’t think this is fair.",
            'the_issue_header' => "The issue",
            'the_issue_subheader' => "WHY WE ARE CAMPAIGNING",
            'the_issue_text_left' => "Dummy text. Giving hint to potential content. The CQC have introduced guidance which restricts peoples’ lives. Intended to help people, does the",
            'the_issue_text_right' => "opposite. Limits choice, only pick local places, etc. We wish to challenge this, to bring fair guidance to social care. Why? Because every life matters.",
            'why_it_matters_header' => "Why it matters",
            'why_it_matters_subheader' => "Meet Matthew",
            'why_it_matters_text' => "Dummy quote. This has really a ected me. It's not fair. I'm not happy. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.",
            'why_it_matters_fact' => "IMPACT FACT ABOUT MATTHEW’S LIFE AND HOW THIS AFFECTS HIM.",
            'our_goals_header' => "Our goals",
            'our_goals_subheader' => "WHAT WE'RE GOING TO ACHIEVE",
            'our_goals_goal_1' => "Provide a voice to families and all involved",
            'our_goals_goal_2' => "Increase awareness of the issue",
            'our_goals_goal_3' => "Compel CQC to change its guidance",
            'our_goals_goal_4' => "Define a new model of care",
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
