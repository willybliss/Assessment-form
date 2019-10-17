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
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('rating_id');
            $table->unsignedInteger('skill_id');
            $table->timestamps();
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
