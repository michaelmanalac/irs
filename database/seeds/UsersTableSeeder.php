<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'last_name'         => 'Doe',
                'middle_name'       => 'Doe',
                'first_name'        => 'John',
                'birthday'          => 1,
                'birthmonth'        => 1,
                'birthyear'         => 2000,
                'gender'            => 1,
                'address'           => 'Somewhere',
                'contact'           => "123456789",
                'account_id'        => 1,
            ],
            [
                'last_name'         => 'Doe',
                'middle_name'       => 'Doe',
                'first_name'        => 'Jane',
                'birthday'          => 1,
                'birthmonth'        => 1,
                'birthyear'         => 2000,
                'gender'            => 1,
                'address'           => 'Somewhere',
                'contact'           => "123456789",
                'account_id'        => 2,
            ]
        ]);
    }
}
