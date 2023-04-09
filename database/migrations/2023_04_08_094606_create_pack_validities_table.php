<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackValiditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_validities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examination_pack_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('end_date');
            $table->timestamps();
            $table->foreign('examination_pack_id')->references('id')->on('examination_packs')->onDelete('cascade');
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
        Schema::dropIfExists('pack_validities');
    }
}
