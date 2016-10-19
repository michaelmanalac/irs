<?php

use Illuminate\Database\Seeder;

class AccountStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_statuses')->insert([
            [
                'name'          => 'Activated',
                'description'   => 'Account is verified and activated.',
                'created_at'    => Carbon\Carbon::now(),
            ],
            [
                'name'          => 'Deactivated',
                'description'   => 'Account is deactivated by user.',
                'created_at'    => Carbon\Carbon::now(),
            ],
            [
                'name'          => 'Pending',
                'description'   => 'Account is pending for verification.',
                'created_at'    => Carbon\Carbon::now(),
            ],
            [
                'name'          => 'Temporarily Banned',
                'description'   => 'Account is temporarily banned with time penalty.',
                'created_at'    => Carbon\Carbon::now(),
            ],
            [
                'name'          => 'Blacklist',
                'description'   => 'Account is blacklisted.',
                'created_at'    => Carbon\Carbon::now(),
            ]
        ]);
    }
}
