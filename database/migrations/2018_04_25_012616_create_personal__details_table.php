<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal__details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('DOB'); //!!should store as a date function
            $table->integer('drivers_licence_number');
            $table->integer('mobile_number');
            $table->string('current_address');
            $table->string('time_at_address');
            $table->string('residential_status');
            $table->string('citizen_status');
            $table->string('martial_status');
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
        Schema::dropIfExists('personal__details');
    }
}
