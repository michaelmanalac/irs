<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
    @include('base.includes.header')
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon"
                           for="fixed-header-drawer-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample"
                               id="fixed-header-drawer-exp">
                    </div>
                </div>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">
                <img class="mdl-layout-title__profile-image--round" src="{{ asset('images/account-images/no-pic.jpg') }}" alt="">
                <span class="mdl-layout-title__profile-name">John Doe</span>
            </span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href=""><i class="mdl-icon-toggle__label material-icons">dashboard</i>Dashboard</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-icon-toggle__label material-icons">
                        chrome_reader_mode</i>Transactions</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-icon-toggle__label material-icons">
                        exit_to_app</i>Logout</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content"><!-- Your content goes here --></div>
        </main>
    </div>
    @include('base.includes.footer')
</body>
</html>