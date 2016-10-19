<?php

use Illuminate\Database\Seeder;

class CreditCardNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credit_card_names')->insert([
            [
                'name'          => 'American Express',
                'description'   => 'Offers world-class Charge and Credit Cards, Gift Cards, Rewards, Travel, Personal Savings, Business Services, Insurance and more.'
            ],
            [
                'name'          => 'Maestro',
                'description'   => 'Is a multi-national debit card service owned by MasterCard that was founded in 1992.'
            ],
            [
                'name'          => 'MasterCard',
                'description'   => 'Is a leading global payments & technology company that connects consumers, businesses, merchants, issuers & governments around the world.'
            ],
            [
                'name'          => 'Visa',
                'description'   => 'Is an American multinational financial services corporation headquartered in Foster City, California, United States.'
            ]
        ]);
    }
}
