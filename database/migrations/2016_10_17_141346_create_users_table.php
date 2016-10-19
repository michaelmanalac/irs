<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('first_name');
            $table->integer('birthday');
            $table->integer('birthmonth');
            $table->integer('birthyear');
            $table->integer('gender');
            $table->text('address');
            $table->text('contact');
            $table->integer('account_id')->unsigned()->unique();

            // Relationships

            $table->foreign('account_id')
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
        Schema::dropIfExists('users');
    }
}
