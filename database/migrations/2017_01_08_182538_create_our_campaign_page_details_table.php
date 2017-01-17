<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurCampaignPageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_campaign_page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_background_image_path')->nullable();
            $table->string('banner_background_image_path_thumbnail')->nullable();
            $table->string('banner_header');
            $table->string('banner_subheader');

            $table->text('fact');
            $table->text('fact_bold');

            $table->string('the_issue_header');
            $table->string('the_issue_subheader');
            $table->text('the_issue_text_left');
            $table->text('the_issue_text_right');

            $table->string('why_it_matters_header');
            $table->string('why_it_matters_subheader');
            $table->text('why_it_matters_text');
            $table->text('why_it_matters_fact');
            $table->string('why_it_matters_image_path')->nullable();
            $table->string('why_it_matters_image_path_thumbnail')->nullable();

            $table->string('our_goals_header');
            $table->string('our_goals_subheader');
            $table->text('our_goals_goal_1');
            $table->text('our_goals_goal_2');
            $table->text('our_goals_goal_3');
            $table->text('our_goals_goal_4');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_campaign_page_details');
    }
}
