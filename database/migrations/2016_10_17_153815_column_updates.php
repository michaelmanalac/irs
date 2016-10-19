<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnUpdates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('account_statuses', function($table) {
            $table->integer('created_by')->unsigned()->nullable()->after('description');

            // Relationships

            $table->foreign('created_by')
                  ->references('id')
                  ->on('accounts');
        });

        Schema::table('account_types', function($table) {
            $table->integer('created_by')->unsigned()->nullable()->after('description');

            // Relationships

            $table->foreign('created_by')
                ->references('id')
                ->on('accounts');
        });

        Schema::table('countries', function($table) {
            $table->integer('created_by')->unsigned()->nullable()->after('calling_code');

            // Relationships

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
        //
    }
}
