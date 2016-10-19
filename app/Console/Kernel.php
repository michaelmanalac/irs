<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function() {
            $transactions = \App\Transaction::all();

            if ( $transactions->count() > 0 ) {
                foreach ($transactions as $transaction) {
                    if ($transaction->transaction_status_id == 1 && $transaction->created_at->diffInMonths(\Carbon\Carbon::now()) > 0) {
                        $payments = $transaction->payments;
                        if ( $payments->count() > 0 ) {
                            $payments = \App\Payment::where('transaction_id', $transaction->id)
                                ->orderBy('id', 'desc')
                                ->first();
                            // Check if transaction if is due for increase
                            if ($payments->created_at->diffInMonths(\Carbon\Carbon::now()) > 0) {
                                $monthlyIncreases = $transaction->monthly_increases;
                                // Check if transaction has been increase for the month
                                if ( $monthlyIncreases->count() > 0 ) {
                                    $monthlyIncreases = \App\MonthlyIncrease::where('transaction_id', $transaction->id)
                                        ->orderBy('id', 'desc')
                                        ->first();
                                    // Check if transaction if is due for increase
                                    if ($monthlyIncreases->created_at->diffInMonths(\Carbon\Carbon::now()) > 0) {
                                        $thisMonthIncrease = ($transaction->monthly_interest / 100) * $transaction->balance;

                                        $monthlyIncrease = new \App\MonthlyIncrease;
                                        $monthlyIncrease->amount = $thisMonthIncrease;
                                        $monthlyIncrease->account_id = $transaction->account_id;
                                        $monthlyIncrease->transaction_id = $transaction->id;
                                        $monthlyIncrease->save();

                                        $increaseTransaction = \App\Transaction::find($transaction->id);
                                        $increaseTransaction->balance = $increaseTransaction->balance + $thisMonthIncrease;
                                        $increaseTransaction->save();
                                    }
                                } else {
                                    $thisMonthIncrease = ($transaction->monthly_interest / 100) * $transaction->balance;

                                    $monthlyIncrease = new \App\MonthlyIncrease;
                                    $monthlyIncrease->amount = $thisMonthIncrease;
                                    $monthlyIncrease->account_id = $transaction->account_id;
                                    $monthlyIncrease->transaction_id = $transaction->id;
                                    $monthlyIncrease->save();

                                    $increaseTransaction = \App\Transaction::find($transaction->id);
                                    $increaseTransaction->balance = $increaseTransaction->balance + $thisMonthIncrease;
                                    $increaseTransaction->save();

                                }
                            }
                        } else {
                            // Check if transaction has been increase for the month
                            $monthlyIncreases = $transaction->monthly_increases;

                            if ( $monthlyIncreases->count() > 0 ) {
                                $monthlyIncreases = \App\MonthlyIncrease::where('transaction_id', $transaction->id)
                                    ->orderBy('id', 'desc')
                                    ->first();

                                // Check if transaction if is due for increase
                                if ($monthlyIncreases->created_at->diffInMonths(\Carbon\Carbon::now()) > 0) {
                                    $thisMonthIncrease = ($transaction->monthly_interest / 100) * $transaction->balance;

                                    $monthlyIncrease = new \App\MonthlyIncrease;
                                    $monthlyIncrease->amount = $thisMonthIncrease;
                                    $monthlyIncrease->account_id = $transaction->account_id;
                                    $monthlyIncrease->transaction_id = $transaction->id;
                                    $monthlyIncrease->save();

                                    $increaseTransaction = \App\Transaction::find($transaction->id);
                                    $increaseTransaction->balance = $increaseTransaction->balance + $thisMonthIncrease;
                                    $increaseTransaction->save();
                                }
                            } else {
                                $thisMonthIncrease = ($transaction->monthly_interest / 100) * $transaction->balance;

                                $monthlyIncrease = new \App\MonthlyIncrease;
                                $monthlyIncrease->amount = $thisMonthIncrease;
                                $monthlyIncrease->account_id = $transaction->account_id;
                                $monthlyIncrease->transaction_id = $transaction->id;
                                $monthlyIncrease->save();

                                $increaseTransaction = \App\Transaction::find($transaction->id);
                                $increaseTransaction->balance = $increaseTransaction->balance + $thisMonthIncrease;
                                $increaseTransaction->save();
                            }
                        }
                    }
                }
            }
        })->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
