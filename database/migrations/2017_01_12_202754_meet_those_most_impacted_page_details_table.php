<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeetThoseMostImpactedPageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_those_most_impacted_page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_background_image_path')->nullable();
            $table->string('banner_background_image_path_thumbnail')->nullable();
            $table->string('banner_header')->nullable();
            $table->string('banner_subheader')->nullable();

            $table->string('the_impact_is_huge_header')->nullable();
            $table->string('the_impact_is_huge_subheader')->nullable();
            $table->text('the_impact_is_huge_text_left')->nullable();
            $table->text('the_impact_is_huge_text_right')->nullable();

            $table->text('fact')->nullable();
            $table->text('fact_bold')->nullable();

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
        Schema::dropIfExists('meet_those_most_impacted_page_details');
    }
}
