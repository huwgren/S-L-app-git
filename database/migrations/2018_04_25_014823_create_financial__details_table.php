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
            $table->integer('salary');
            $table->string('salary_periodicity');
            $table->integer('rental_income')->nullable();
            $table->string('rental_periodicity')->nullable();
            $table->integer('other_income')->nullable();
            $table->string('other_income_periodicity')->nullable();

            //Assets
            $table->integer('properties_value')->nullable();
            $table->integer('other_assets_value')->nullable();
            $table->integer('savings_value')->nullable();

            //Expenses
            $table->integer('rent_expense')->nullable();
            $table->string('rent_expense_periodicity')->nullable();

            $table->integer('other_expenses');
            $table->string('expenses_periodicity');

            $table->string('number_dependents');

            //Liabilities
                //home loan
            $table->integer('loan_home')->nullable();
            $table->string('loan_home_periodicity')->nullable();
            $table->integer('loan_home_owing')->nullable();
                //credit cards
            $table->integer('loan_creditcard_owing')->nullable();
            $table->integer('loan_creditcard_limit')->nullable();
                //personal loan
            $table->integer('loan_personal')->nullable();
            $table->string('loan_personal_periodicity')->nullable();
            $table->integer('loan_personal_owing')->nullable();

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
