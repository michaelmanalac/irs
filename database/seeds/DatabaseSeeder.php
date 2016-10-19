<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AccountStatusTableSeeder::class);
        $this->call(AccountTypesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PaymentTypesTableSeeder::class);
        $this->call(TransactionTypesTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(CreditCardNamesTableSeeder::class);
        $this->call(TransactionStatusesTableSeeder::class);

    }
}
