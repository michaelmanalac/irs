<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount', 7, 2);
            $table->integer('account_id')->unsigned();
            $table->integer('payment_type_id')->unsigned();
            $table->integer('payment_method_id')->unsigned();
            $table->integer('transaction_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->timestamps();

            // Relationships

            $table->foreign('account_id')
                  ->references('id')
                  ->on('accounts');

            $table->foreign('payment_type_id')
                ->references('id')
                ->on('payment_types');

            $table->foreign('payment_method_id')
                ->references('id')
                ->on('payment_methods');

            $table->foreign('transaction_id')
                ->references('id')
                ->on('transactions');

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
        Schema::dropIfExists('payments');
    }
}
