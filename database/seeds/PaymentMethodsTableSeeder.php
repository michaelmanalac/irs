<?php

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            [
                'name'          => 'Cash',
                'description'   => 'Legal tender or coins that can be used to exchange goods, debt or services.'
            ],
            [
                'name'          => 'Check',
                'description'   => 'A written, dated and signed instrument that contains an unconditional order from the drawer that directs a bank to pay a definite sum of money to a payee.'
            ],
            [
                'name'          => 'Credit Card',
                'description'   => 'A small plastic card issued by a bank, business, etc., allowing the holder to purchase goods or services on credit.'
            ],
        ]);
    }
}
