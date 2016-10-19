<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('base.includes.header')
</head>
<body>
<div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--8-col">
        <div class="mdl-card mdl-card--width-full mdl-shadow--6dp">
            <div class="mdl-card__supporting-text">
                {!! Form::open(['route' => ['transactions.update', $transaction_id],'method' => 'PATCH']) !!}
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col">
                        <h3>Transaction Information</h3>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col">
                        <div class="mdl-selectfield mdl-js-selectfield">
                            <select id="transaction_type" name="transaction_type" class="mdl-selectfield__select" required>
                                <option value="{{ $transaction_type_id }}">{{ $transaction_type_name }} ({{ $transaction_type_mi }}% MI)</option>
                                @foreach($transaction_types as $transaction_type)
                                    <option value="{{ $transaction_type->id }}">{{ $transaction_type->name }} ({{ $transaction_type->monthly_interest }}% MI)</option>
                                @endforeach
                            </select>
                            <label class="mdl-selectfield__label" for="transaction_type">Transaction Type</label>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col">
                        <div class="mdl-selectfield mdl-js-selectfield">
                            <select id="client" name="client" class="mdl-selectfield__select" required>
                                <option value="{{ $client }}">{{ $client }}</option>
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->id }}</option>
                                @endforeach
                            </select>
                            <label class="mdl-selectfield__label" for="client">Client ID</label>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input type="number" class="mdl-textfield__input" value="{{ $amount }}" placeholder="Amount" name="amount" id="amount" required />
                            <label class="mdl-textfield__label" for="amount">Amount</label>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <button type="submit" class="mdl-button mdl-button--width-full mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--primary">
                        Update Transaction
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="mdl-layout-spacer"></div>
</div>
</body>
</html>