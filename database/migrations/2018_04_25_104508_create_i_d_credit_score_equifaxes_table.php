<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIDCreditScoreEquifaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_d_credit_score_equifaxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->boolean('ID_check');
            $table->integer('credit_score');
            $table->timestamps();
        });

        // Insert dummy data
        DB::table('i_d_credit_score_equifaxes')->insert([
            'email' => 'huw@gmail.com',
            'ID_check' => '1',
            'credit_score'=>'250',
        ]);

        // Insert dummy data
        DB::table('i_d_credit_score_equifaxes')->insert([
            'email' => 'nat@gmail.com',
            'ID_check' => '1',
            'credit_score'=>'150',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_d_credit_score_equifaxes');
    }
}
