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
                            <h3>Client Information</h3>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="text" class="mdl-textfield__input" placeholder="First Name" name="first_name" id="first_name" required />
                                <label class="mdl-textfield__label" for="email">Email Address</label>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="text" class="mdl-textfield__input" placeholder="Middle Name" name="middle_name" id="middle_name" required />
                                <label class="mdl-textfield__label" for="email">Email Address</label>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="text" class="mdl-textfield__input" placeholder="Last Name" name="last_name" id="last_name" required />
                                <label class="mdl-textfield__label" for="email">Email Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="mdl-selectfield mdl-js-selectfield">
                                <select id="gender" name="gender" class="mdl-selectfield__select">
                                    <option value=""></option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <label class="mdl-selectfield__label" for="gender">Gender</label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="mdl-selectfield mdl-js-selectfield">
                                <select id="birthmonth" name="birthmonth" class="mdl-selectfield__select">
                                    <option value=""></option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">Auguest</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <label class="mdl-selectfield__label" for="birthmonth">Birth Month</label>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="number" class="mdl-textfield__input" placeholder="Birthday" name="birthday" id="birthday" required />
                                <label class="mdl-textfield__label" for="birthday">Birthday</label>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="mdl-textfield mdl-js-textfield">
                                <input type="number" maxlength="4" class="mdl-textfield__input" placeholder="Birthyear" name="birthyear" id="birthyear" required />
                                <label class="mdl-textfield__label" for="birthyear">Birthyear</label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--8-col">
                            <div class="mdl-textfield mdl-textfield--width-full mdl-js-textfield">
                                <input type="text" class="mdl-textfield__input" placeholder="Address" name="address" id="address" required />
                                <label class="mdl-textfield__label" for="address">Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--5-col">
                            <div class="mdl-textfield mdl-textfield--width-full mdl-js-textfield">
                                <input type="text" maxlength="10" class="mdl-textfield__input" value="+63" name="contact" id="contact" required />
                                <label class="mdl-textfield__label" for="contact">Contact</label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--8-col">
                            <h3>Account Information</h3>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--8-col">
                            <div class="mdl-textfield mdl-textfield--width-full mdl-js-textfield">
                                <input type="email" class="mdl-textfield__input" placeholder="Email" name="email" id="email" required />
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col">
                            <div class="mdl-textfield mdl-textfield--width-full mdl-js-textfield">
                                <input type="password" class="mdl-textfield__input" placeholder="Password" name="password" id="password" required />
                                <label class="mdl-textfield__label" for="password">Password</label>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col">
                            <div class="mdl-textfield mdl-textfield--width-full mdl-js-textfield">
                                <input type="password" class="mdl-textfield__input" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required />
                                <label class="mdl-textfield__label" for="confirm_password">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <button type="submit" class="mdl-button mdl-button--width-full mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--primary">
                            Register
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