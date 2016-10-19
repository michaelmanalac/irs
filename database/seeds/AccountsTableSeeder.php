<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'image'             => null,
                'email'             => 'sample@sample.com',
                'password'          => bcrypt('password'),
                'created_at'        => Carbon\Carbon::now(),
                'account_type_id'   => 1,
                'account_status_id' => 1
            ],
            [
                'image'             => null,
                'email'             => 'sample2@sample.com',
                'password'          => bcrypt('password'),
                'created_at'        => Carbon\Carbon::now(),
                'account_type_id'   => 2,
                'account_status_id' => 1
            ]
        ]);
    }
}
