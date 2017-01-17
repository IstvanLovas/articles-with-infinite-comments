<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheFactsPageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_facts_page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_background_image_path')->nullable();
            $table->string('banner_background_image_path_thumbnail')->nullable();
            $table->string('banner_header');

            $table->string('why_this_matters_header');
            $table->string('why_this_matters_subheader');
            $table->text('why_this_matters_lead');
            $table->text('why_this_matters_text_left');
            $table->text('why_this_matters_text_right');

            $table->string('key_fact_1_header');
            $table->string('key_fact_1_number');
            $table->string('key_fact_1_image_path')->nullable();
            $table->string('key_fact_2_header');
            $table->string('key_fact_2_number');
            $table->string('key_fact_2_image_path')->nullable();
            $table->string('key_fact_3_header');
            $table->string('key_fact_3_number');
            $table->string('key_fact_3_image_path')->nullable();

            $table->string('our_progress_header');
            $table->string('our_progress_subheader');
            $table->text('our_progress_1_text');
            $table->string('our_progress_1_image_path')->nullable();
            $table->text('our_progress_2_text');
            $table->string('our_progress_2_image_path')->nullable();
            $table->text('our_progress_3_text');
            $table->string('our_progress_3_image_path')->nullable();
            $table->text('our_progress_4_text');
            $table->string('our_progress_4_image_path')->nullable();

            $table->string('our_current_challenge_header');
            $table->string('our_current_challenge_subheader');
            $table->string('our_current_challenge_lead');
            $table->text('our_current_challenge_text_left');
            $table->text('our_current_challenge_text_right');

            $table->text('fact');
            $table->text('fact_bold');

            $table->string('why_us_header');
            $table->string('why_us_subheader');
            $table->text('why_us_text');
            $table->string('why_us_list');

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
        Schema::dropIfExists('the_facts_page_details');
    }
}
