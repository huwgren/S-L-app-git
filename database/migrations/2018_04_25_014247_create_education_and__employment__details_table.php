<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationAndEmploymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_and__employment__details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('employer');
            $table->string('employment_status');
            $table->string('job_title');
            $table->string('employment_duration');
            $table->string('education_completed');
            //$table->string('currently_studying')->nullable(); //!! need to work out how to send value based on toggel switch
            $table->string('current_study_level')->nullable();
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
        Schema::dropIfExists('education_and__employment__details');
    }
}
