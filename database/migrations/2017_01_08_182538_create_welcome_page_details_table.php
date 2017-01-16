<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWelcomePageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcome_page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_background_image_path')->nullable();
            $table->string('banner_background_image_path_thumbnail')->nullable();
            $table->string('banner_header')->nullable();
            $table->string('banner_subheader')->nullable();

            $table->text('fact')->nullable();
            $table->text('fact_bold')->nullable();

            $table->string('the_issue_header')->nullable();
            $table->string('the_issue_subheader')->nullable();
            $table->text('the_issue_text_left')->nullable();
            $table->text('the_issue_text_right')->nullable();

            $table->string('why_it_matters_header')->nullable();
            $table->string('why_it_matters_subheader')->nullable();
            $table->text('why_it_matters_text')->nullable();
            $table->text('why_it_matters_fact')->nullable();
            $table->string('why_it_matters_image_thumbnail')->nullable();
            $table->string('why_it_matters_image_path_thumbnail')->nullable();

            $table->string('our_goals_header')->nullable();
            $table->string('our_goals_subheader')->nullable();
            $table->text('our_goals_goal_1')->nullable();
            $table->text('our_goals_goal_2')->nullable();
            $table->text('our_goals_goal_3')->nullable();

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
        Schema::dropIfExists('welcome_page_details');
    }
}
