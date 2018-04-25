<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditRiskWeightingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_risk_weightings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age_weighting');
            $table->integer('serviceability_weighting');
            $table->integer('employment_duration_weighting');
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
        Schema::dropIfExists('credit_risk_weightings');
    }
}
