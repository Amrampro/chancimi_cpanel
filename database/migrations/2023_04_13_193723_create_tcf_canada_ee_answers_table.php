<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcfCanadaEeAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcf_canada_ee_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tcf_canada_ees_id');
            $table->unsignedBigInteger('tcf_canada_exams_id');
            $table->text('answer');
            //This is the question in form of essay and answers. If the question is a video, the link of the video has to be placed here
            /*
            An example of the format is:
                ---Link of video here---
                And all other essay question if needed here
                */
            $table->timestamps();
            $table->foreign('tcf_canada_ees_id')->references('id')->on('tcf_canada_ees')->onDelete('cascade');
            $table->foreign('tcf_canada_exams_id')->references('id')->on('tcf_canada_exams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tcf_canada_ee_answers');
    }
}
