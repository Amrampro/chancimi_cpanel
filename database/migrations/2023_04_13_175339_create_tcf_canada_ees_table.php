<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcfCanadaEesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcf_canada_ees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tcf_canadas_id');
            $table->text('question');
            //This is the question in form of essay and answers. If the question is a video, the link of the video has to be placed here
            /*
            An example of the format is:
                ---Link of video here---
                And all other essay question if needed here
            */
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
        Schema::dropIfExists('tcf_canada_ees');
    }
}
