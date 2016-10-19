@extends('base.dashboard.cashier.layout')
@section('navigation')
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href=" {{ url('cashier/dashboard') }}"><i class="mdl-icon-toggle__label material-icons">dashboard</i>Dashboard</a>
        <a class="mdl-navigation__link" href="{{ url('logout') }}"><i class="mdl-icon-toggle__label material-icons">
                exit_to_app</i>Logout</a>
    </nav>
@endsection

@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <div class="mdl-grid">
                <div class="mdl-cell">
                    <h4>Client Transactions</h4>
                </div>
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
                                <td class="mdl-data-table__cell--non-numeric">
                                    <a href="{{ url('transactions/'.$transaction->id.'/payments/create') }}">
                                        Add Payment
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mdl-grid">
                <a href="{{ url('transactions/create') }}">
                    <button style="position: fixed; bottom: 25px; right: 25px;" class="mdl-button--floating-action mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                        <i class="material-icons">add</i>
                    </button>
                </a>
            </div>
            </div>
        </div>
    </div>
@endsection