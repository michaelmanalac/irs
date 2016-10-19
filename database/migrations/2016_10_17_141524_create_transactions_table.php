<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount', 7, 2);
            $table->double('balance', 7, 2);
            $table->integer('monthly_interest');
            $table->integer('account_id')->unsigned();
            $table->integer('transaction_type_id')->unsigned();
            $table->integer('transaction_status_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->timestamps();

            // Relationships

            $table->foreign('account_id')
                  ->references('id')
                  ->on('accounts');

            $table->foreign('transaction_type_id')
                  ->references('id')
                  ->on('transaction_types');

            $table->foreign('transaction_status_id')
                  ->references('id')
                  ->on('transaction_statuses');

            $table->foreign('created_by')
                ->references('id')
                ->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
