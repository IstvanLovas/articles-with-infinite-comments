<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivacyPolicyPageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacy_policy_page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner_background_image_path')->nullable();
            $table->string('banner_background_image_path_thumbnail')->nullable();
            $table->string('banner_header');
            $table->string('privacy_policy_header');
            $table->text('privacy_policy_text_left');
            $table->text('privacy_policy_text_right');
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
        Schema::dropIfExists('privacy_policy_page_details');
    }
}
