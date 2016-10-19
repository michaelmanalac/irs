<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    @include('base.includes.header')
</head>
<body>
    <div class="mdl-grid">
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-cell">
            <div class="mdl-card mdl-card--width-full mdl-shadow--6dp">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                    <h2 class="mdl-card__title-text">Interest Rate System</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    {!! Form::open(['url' => 'login','method' => 'POST']) !!}
                    <div class="mdl-grid">
                        <div class="mdl-textfield mdl-textfield--width-full mdl-js-textfield">
                            <input type="text" class="mdl-textfield__input" placeholder="Email Address" name="email" id="email" required />
                            <label class="mdl-textfield__label" for="email">Email Address</label>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-textfield mdl-textfield--width-full mdl-js-textfield">
                            <input type="password" class="mdl-textfield__input" placeholder="Password" name="password" id="password" required />
                            <label class="mdl-textfield__label" for="password">Password</label>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <button type="submit" class="mdl-button mdl-button--width-full mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--primary">
                            Login
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="mdl-layout-spacer"></div>
    </div>

    <!-- Scripts -->
    @include('base.includes.footer')
</body>
</html>