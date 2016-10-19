<?php

namespace App\Http\Controllers\Base;

use App\MonthlyIncrease;
use App\Payment;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Routing\Controller;

class ClientController extends Controller
{
    public function dashboard() {

        $data['user'] = User::where('account_id', Auth::id())->first();

        $data['transactions'] = Transaction::where('account_id', Auth::id())
                                            ->orderBy('id', 'desc')
                                            ->get();

        $data['payments'] = Payment::where('account_id', Auth::id())
                                        ->orderBy('id', 'desc')
                                        ->get();

        $data['monthly_increases'] = MonthlyIncrease::where('account_id', Auth::id())
                                                ->orderBy('id', 'desc')
                                                ->get();

        return view('base.dashboard.client.dashboard', $data);
    }
}
