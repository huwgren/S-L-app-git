<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial__details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');

            //Income
            $table->bigInteger('salary');
            $table->string('salary_periodicity');
            $table->bigInteger('rental_income')->nullable();
            $table->string('rental_periodicity')->nullable();
            $table->bigInteger('other_income')->nullable();
            $table->string('other_income_periodicity')->nullable();

            //Assets
            $table->bigInteger('properties_value')->nullable();
            $table->bigInteger('other_assets_value')->nullable();
            $table->bigInteger('savings_value')->nullable();

            //Expenses
            $table->bigInteger('rent_expense')->nullable();
            $table->string('rent_expense_periodicity')->nullable();

            $table->bigInteger('other_expenses');
            $table->string('expenses_periodicity');

            $table->string('number_dependents');

            //Liabilities
                //home loan
            $table->bigInteger('loan_home')->nullable();
            $table->string('loan_home_periodicity')->nullable();
            $table->bigInteger('loan_home_owing')->nullable();
                //credit cards
            $table->bigInteger('loan_creditcard_owing')->nullable();
            $table->bigInteger('loan_creditcard_limit')->nullable();
                //personal loan
            $table->bigInteger('loan_personal')->nullable();
            $table->string('loan_personal_periodicity')->nullable();
            $table->bigInteger('loan_personal_owing')->nullable();

            //Acknowledgements
                //todo
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
        Schema::dropIfExists('financial__details');
    }
}
