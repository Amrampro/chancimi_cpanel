<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examination_packs', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('price');
            $table->unsignedBigInteger('exam_id');
            // This features must be entered in the format "feature1, feature2, feature3, feature4" for it to work correctly when fetched in th code
            $table->text('features');
            $table->text('details');
            $table->timestamps();
            $table->foreign('exam_id')->references('id')->on('examinations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examination_packs');
    }
}
