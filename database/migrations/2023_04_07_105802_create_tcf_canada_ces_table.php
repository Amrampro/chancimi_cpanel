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
            $table->string('question');
            $table->string('answer_a');
            $table->string('answer_b');
            $table->string('answer_c');
            $table->string('answer');
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
