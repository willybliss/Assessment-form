<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment__staff', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('staff_id');

            $table->unsignedBigInteger('category_id');

            $table->unsignedBigInteger('rating_id');

            $table->unsignedBigInteger('skill_id');

            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('users');

           // $table->foreign('category_id')->references('id')->on('categories');

          //  $table->foreign('rating_id')->references('id')->on('ratings');

           // $table->foreign('skill_id')->references('id')->on('skills');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessment__staff');
    }
}
