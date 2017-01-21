<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetThoseAffectedPageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_those_affected_page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_background_image_path')->nullable();
            $table->string('banner_background_image_path_thumbnail')->nullable();
            $table->string('banner_header');

            $table->string('the_impact_is_huge_header');
            $table->string('the_impact_is_huge_subheader');
            $table->text('the_impact_is_huge_text_left');
            $table->text('the_impact_is_huge_text_right');

            $table->text('fact');
            $table->text('fact_bold');

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
        Schema::dropIfExists('meet_those_affected_page_details');
    }
}
