<?php

use Illuminate\Database\Seeder;

class TransactionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_types')->insert([
            [
                'name'              => 'Loan',
                'description'       => 'A thing that is borrowed, especially a sum of money that is expected to be paid back with interest.',
                'monthly_interest'  => 1
            ],
            [
                'name'              => 'Pawn',
                'description'       => 'To deposit as security, as for money borrowed, especially with a pawnbroker.',
                'monthly_interest'  => 1
            ],
            [
                'name'              => 'Purchase',
                'description'       => 'Acquire (something) by paying for it; buy.',
                'monthly_interest'  => 1
            ]
        ]);
    }
}
