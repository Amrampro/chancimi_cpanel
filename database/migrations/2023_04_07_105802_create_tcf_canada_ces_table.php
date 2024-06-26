<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcfCanadaCesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcf_canada_ces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tcf_canadas_id');
            $table->string('question_number');
            $table->text('question');
            //This is the question and answers included
            /*
            An example of the format is:
                1) What is 1 + 1
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
        Schema::dropIfExists('tcf_canada_ces');
    }
}
