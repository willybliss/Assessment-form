<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentAppraisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment__appraisers', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->unsignedBigInteger('appraiser_id');

            //$table->unsignedInteger('category_id');
            
            //$table->unsignedInteger('rating_id');
            
            //$table->unsignedInteger('skill_id');
            
           // $table->unsignedInteger('staff_id');
            
            $table->timestamps();

            //$table->foreign('appraiser_id')->references('id')->on('users');

            //$table->foreign('category_id')->references('id')->on('categories');

            //$table->foreign('rating_id')->references('id')->on('ratings');

            //$table->foreign('skills')->references('id')->on('skills');
            
            //$table->foreign('staff_id')->references('id')->on('users')
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessment__appraisers');
    }
}
