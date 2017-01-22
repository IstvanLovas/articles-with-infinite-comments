<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseStudyPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_study_photos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('case_study_id')->unsigned();
            $table->foreign('case_study_id')->references('id')->on('case_studies')->onDelete('cascade');

            $table->string('name');
            $table->string('path');
            $table->string('thumbnail_path');

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
        Schema::dropIfExists('case_study_photos');
    }
}
