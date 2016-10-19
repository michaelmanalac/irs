<?php

use Illuminate\Database\Seeder;

class PaymentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_types')->insert([
            [
                'name'          => 'Down Payment',
                'description'   => 'An initial payment made when something is bought on credit.'
            ],
            [
                'name'          => 'Installment',
                'description'   => 'A sum of money due as one of several equal payments for something, spread over an agreed period of time.'
            ],
            [
                'name'          => 'Full Payment',
                'description'   => 'Remitting all funds due to another.'
            ]
        ]);
    }
}
