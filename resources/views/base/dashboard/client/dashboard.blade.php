@extends('base.dashboard.client.layout')
@section('navigation')
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href=" {{ url('client/dashboard') }}"><i class="mdl-icon-toggle__label material-icons">dashboard</i>Dashboard</a>
        <a class="mdl-navigation__link" href="{{ url('logout') }}"><i class="mdl-icon-toggle__label material-icons">
                exit_to_app</i>Logout</a>
    </nav>
@endsection

@section('content')
    <div class="mdl-grid">
        <h4>Transactions</h4>
    </div>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--8--col">
            <table style="width: 100%;" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Transaction Number</th>
                    <th class="mdl-data-table__cell--non-numeric">Transaction Type</th>
                    <th class="mdl-data-table__cell--non-numeric">Balance</th>
                    <th class="mdl-data-table__cell--non-numeric">Date Issued</th>
                </tr>
                </thead>
                <tbody>
                @foreach($transactions->all() as $transaction)
                    <tr>
                        <td class="mdl-data-table__cell">{{ $transaction->id }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $transaction->transaction_type->name }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $transaction->balance }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mdl-grid">
        <h4>Payments</h4>
    </div>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--8--col">
            <table style="width: 100%;" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Payment Number</th>
                    <th class="mdl-data-table__cell--non-numeric">Transaction Number</th>
                    <th class="mdl-data-table__cell--non-numeric">Payment Method</th>
                    <th class="mdl-data-table__cell--non-numeric">Payment Type</th>
                    <th class="mdl-data-table__cell--non-numeric">Amount</th>
                    <th class="mdl-data-table__cell--non-numeric">Date Issued</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments->all() as $payment)
                    <tr>
                        <td class="mdl-data-table__cell">{{ $payment->id }}</td>
                        <td class="mdl-data-table__cell">{{ $payment->transaction_id }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $payment->payment_method->name }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $payment->payment_type->name }}</td>
                        <td class="mdl-data-table__cell">{{ $payment->amount }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $payment->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mdl-grid">
        <h4>Monthly Increase</h4>
    </div>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--8--col">
            <table style="width: 100%;" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Issue Number</th>
                    <th class="mdl-data-table__cell--non-numeric">Transaction Number</th>
                    <th class="mdl-data-table__cell--non-numeric">Amount</th>
                    <th class="mdl-data-table__cell--non-numeric">Date Issued</th>
                </tr>
                </thead>
                <tbody>
                @foreach($monthly_increases->all() as $monthly_increase)
                    <tr>
                        <td class="mdl-data-table__cell">{{ $monthly_increase->id }}</td>
                        <td class="mdl-data-table__cell">{{ $monthly_increase->transaction_id }}</td>
                        <td class="mdl-data-table__cell">{{ $monthly_increase->amount }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $monthly_increase->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection