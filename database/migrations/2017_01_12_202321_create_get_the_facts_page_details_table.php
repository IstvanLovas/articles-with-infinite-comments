<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetTheFactsPageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_the_facts_page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_background_image_path')->nullable();
            $table->string('banner_background_image_path_thumbnail')->nullable();
            $table->string('banner_header')->nullable();
            $table->string('banner_subheader')->nullable();

            $table->string('the_issue_header')->nullable();
            $table->string('the_issue_subheader')->nullable();
            $table->text('the_issue_text_left')->nullable();
            $table->text('the_issue_text_right')->nullable();

            $table->string('key_fact_1_header')->nullable();
            $table->integer('key_fact_1_number')->nullable();
            $table->integer('key_fact_1_image')->nullable();
            $table->string('key_fact_2_header')->nullable();
            $table->integer('key_fact_2_number')->nullable();
            $table->integer('key_fact_2_image')->nullable();
            $table->string('key_fact_3_header')->nullable();
            $table->integer('key_fact_3_number')->nullable();
            $table->integer('key_fact_3_image')->nullable();

            $table->string('our_aims_header')->nullable();
            $table->string('our_aims_subheader')->nullable();
            $table->text('our_aims_1_text')->nullable();
            $table->string('our_aims_1_image_path')->nullable();
            $table->text('our_aims_2_text')->nullable();
            $table->string('our_aims_2_image_path')->nullable();
            $table->text('our_aims_3_text')->nullable();
            $table->string('our_aims_3_image_path')->nullable();
            $table->text('our_aims_4_text')->nullable();
            $table->string('our_aims_4_image_path')->nullable();

            $table->string('our_current_challenge_header')->nullable();
            $table->text('our_current_challenge_text_left')->nullable();
            $table->text('our_current_challenge_text_right')->nullable();

            $table->text('fact')->nullable();
            $table->text('fact_bold')->nullable();

            $table->string('why_us_header')->nullable();
            $table->string('why_us_subheader')->nullable();
            $table->text('why_us_text')->nullable();
            $table->string('why_us_list')->nullable();

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
        Schema::dropIfExists('get_the_facts_page_details');
    }
}
