<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyIncreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_increases', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount', 7, 2);
            $table->integeR('account_id')->unsigned();
            $table->integeR('transaction_id')->unsigned();
            $table->timestamps();

            // Relationships

            $table->foreign('account_id')
                ->references('id')
                ->on('accounts');

            $table->foreign('transaction_id')
                  ->references('id')
                  ->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_increases');
    }
}
