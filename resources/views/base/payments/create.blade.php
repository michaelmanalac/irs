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
                {!! Form::open(['method' => 'POST']) !!}
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col">
                        <h3>Payment Information</h3>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col">
                        <div class="mdl-selectfield mdl-js-selectfield">
                            <select id="payment_method" name="payment_method" class="mdl-selectfield__select" required>
                                <option value=""></option>
                                @foreach($payment_methods as $payment_method)
                                    <option value="{{ $payment_method->id }}">{{ $payment_method->name }}</option>
                                @endforeach
                            </select>
                            <label class="mdl-selectfield__label" for="payment_method">Payment Method</label>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col">
                        <div class="mdl-selectfield mdl-js-selectfield">
                            <select id="payment_type" name="payment_type" class="mdl-selectfield__select" required>
                                <option value=""></option>
                                @foreach($payment_types as $payment_type)
                                    <option value="{{ $payment_type->id }}">{{ $payment_type->name }}</option>
                                @endforeach
                            </select>
                            <label class="mdl-selectfield__label" for="payment_type">Payment Type</label>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input type="number" maxlength="7" class="mdl-textfield__input" placeholder="Amount" name="amount" id="amount" required />
                            <label class="mdl-textfield__label" for="amount">Amount</label>
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <button type="submit" class="mdl-button mdl-button--width-full mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--primary">
                        Create Payment
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