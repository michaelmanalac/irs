<?php

use Illuminate\Database\Seeder;

class TransactionStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_statuses')->insert([
            [
                'name'          => 'Open',
                'description'   => 'Transaction is open.'
            ],
            [
                'name'          => 'Paid/Closed',
                'description'   => 'To discharge or settle (a debt, obligation, etc.), as by transferring money or goods, or by doing something.'
            ],
        ]);
    }
}
