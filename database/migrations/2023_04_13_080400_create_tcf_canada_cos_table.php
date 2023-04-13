<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcfCanadaCosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcf_canada_cos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tcf_canadas_id');
            $table->string('question_number');
            $table->string('file');
            $table->text('details');
            //This is the question details and answers. If the question is a video, the link of the video has to be placed here
            /*
            An example of the format is:
                ---Link of video here---
                Details to question
                    a)2
                    b)3
                    c)4
            */
            $table->string('answer'); // The answer is the correct answer to the question ex: a
            $table->timestamps();
            $table->foreign('tcf_canadas_id')->references('id')->on('tcf_canadas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tcf_canada_cos');
    }
}
