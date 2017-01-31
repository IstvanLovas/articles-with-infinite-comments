<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('our_campaign_page_details')->truncate();
    	DB::table('the_facts_page_details')->truncate();
    	DB::table('meet_those_affected_page_details')->truncate();
    	DB::table('thank_you_page_details')->truncate();

        DB::table('our_campaign_page_details')->insert([
        	'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "Created by Istvan Lovas",
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
            'our_goals_subheader' => "What we're going to do about it",
            'our_goals_goal_1' => "Provide a voice to families and all involved",
            'our_goals_goal_2' => "Increase awareness of the issue",
            'our_goals_goal_3' => "Compel CQC to change its guidance",
            'our_goals_goal_4' => "Define a new model of care",
        ]);

        DB::table('the_facts_page_details')->insert([
        	'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "First 4 word key statement",
            'why_this_matters_header' => "Why this matters",
            'why_this_matters_subheader' => "Why we are campaigning",
            'why_this_matters_lead' => "Showing a quarter of suggested copy. Recommend to ensure that user reads and scrolls to other sections that it is MUCH shorter, 150 words or less. Alternatively, segment can be redesigned to cater for large amounts of text and to make it more engaging to read.",
            'why_this_matters_text_left' => "On top of the moral objections, there are four major practical problems with these rules when relating them to individuals with extremely complex LD and / or Autism:",
            'why_this_matters_text_right' => "As both a family and a provider we know that for people with extremely complex LD, their needs, interactions and behaviours necessitate that living spaces and services have to be built entirely around them. It is almost impossible to support complex individuals in a 'one size  ts all' environment. It reduces everyone to living at the lowest common denominator and sucks the life out of any potential people might have to succeed, however large or small, in their lives. It results in true warehousing. In the case of complex individuals the ‘one size  ts all' is simply another term for ATU.",
            'key_fact_1_header' => "PEOPLE IN SOCIAL CARE AFFECTED BY GUIDANCE",
            'key_fact_1_number' => "15,000",
            'key_fact_2_header' => "MILE LIMIT ON PLACEMENT FROM PARENTAL HOME",
            'key_fact_2_number' => "10",
            'key_fact_3_header' => "INPATIENTS STILL IN ASSESSMENT & TREATMENT CENTRES",
            'key_fact_3_number' => "2500+",
            'our_progress_header' => "Our Progress",
            'our_progress_subheader' => "With your help,the end goal gets ever closer",
            'our_progress_1_text' => "1. CAMPAIGN START",
            'our_progress_1_image_path' => "Text",
            'our_progress_2_text' => "2. WEBSITE & MEDIA CAMPAIGN Launch February 2017",
            'our_progress_2_image_path' => "Text",
            'our_progress_3_text' => "Affected families sign petition",
            'our_progress_3_image_path' => "Text",
            'our_progress_4_text' => "4. CQC Guidance Revised",
            'our_progress_4_image_path' => "Text",
            'our_current_challenge_header' => "Our current challenge",
            'our_current_challenge_subheader' => "THOUSANDS OF AFFECTED FAMILIES SIGN PETITION",
            'our_current_challenge_lead' => "Despite repeated invitations to the CQC Chair, other CQC members, MPs, Select Committee members to engage with families, commissioners and to visit our services to enable us to explain the issues, all invitations have been declined thus far.",
            'our_current_challenge_text_left' => "The consultation process has not been opened up to commissioners or families who are precisely the people who need to be inputting into the debate. CQC’s Guidance and rules have been devised from reports based on historical cases of abuse not on current best practice and what is, and could be",
            'our_current_challenge_text_right' => "achievable. No new models have been asked for, or considered. Our challenge therefore is to present the views and wishes of those most closely involved in the implications of CQC’s new guidance and give this audience a voice at the top table. We want to present a new model and one we believe is the way forward in supporting individuals with complex LD to lead ful lled and active lives that exceed expectations and help them realise their potential.",
            'fact' => "This issue affects over 15,000 people with complex LD and autism. ",
            'fact_bold' => "Don’t you want to hear more?",
            'why_us_header' => "Why Us?",
            'why_us_subheader' => "THE DE SAVARY FAMILY",
            'why_us_text' => "Recommend 150–200 words. Link to HFHC website for user to learn more... Created by Parents to Make a Difference We are a family and a provider. Home From Home Care (HFHC) was established 12 years ago by me, my wife Ann and my son Hugo as we have a daughter (and sister) Laura who has learning disabilities and complex needs. When we looked at places for Laura we were astounded and appalled at what was on o er; the system was broken. We decided the only option available to us was to set up our own care home to provide an environment for Laura and others like her that",
            'why_us_list'=> "Text"
        ]);

        DB::table('meet_those_affected_page_details')->insert([
            'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "First 4 word key statement",
            'the_impact_is_huge_header' => "The impact is huge",
            'the_impact_is_huge_subheader' => "But can we prevent it?",
            'the_impact_is_huge_text_left' => "Dummy text. Giving hint to potential content. Really big issue on peoples’ lives. Those mentioned are not alone. Three examples. diam",
            'the_impact_is_huge_text_right' => "nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.",
            'fact' => "0 commissioners, providers and families consulted before new CQC rules.",
            'fact_bold' => "Don’t you want to hear more?",
        ]);

        DB::table('thank_you_page_details')->insert([
            'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "Thank You",
            'banner_subheader' => "Together, we're changing lives.",
            'but_it_does_not_stop_there_header' => "But it doesn’t stop there...",
            'but_it_does_not_stop_there_sign' => "1. SIGN OUR GOVERNMENT PETITION",
            'but_it_does_not_stop_there_text' => "Dummy text. Giving hint to potential content. You can sign up to a government petition. 10,000 gets us noticed. 100,000 gets us talked about.",
        ]);

        DB::table('privacy_policy_page_details')->insert([
            'banner_background_image_path' => "Text",
            'banner_background_image_path_thumbnail' => "Text",
            'banner_header' => "First short 6 word key statement",
            'privacy_policy_header' => "But it doesn’t stop there...",
            'privacy_policy_text_left' => "Text Left",
            'privacy_policy_text_right' => "Text Right",
        ]);
    }
}
