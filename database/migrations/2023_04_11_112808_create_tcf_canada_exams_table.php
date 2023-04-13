<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcfCanadaExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcf_canada_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tcf_canada_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('pts_ce');
            $table->integer('pts_co');
            $table->integer('pts_ee');
            $table->integer('pts_eo');
            $table->string('matricule');
            $table->integer('state')->default(0);
            $table->timestamps();
            $table->foreign('tcf_canada_id')->references('id')->on('tcf_canadas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tcf_canada_exams');
    }
}
