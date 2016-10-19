<?php

use Illuminate\Database\Seeder;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->insert([
            [
                'name'              => 'Cashier',
                'description'       => 'Handles payments.',
                'created_at'        => Carbon\Carbon::now(),
            ],
            [
                'name'              => 'Client',
                'description'       => 'User of the system.',
                'created_at'        => Carbon\Carbon::now()
            ]
        ]);
    }
}
