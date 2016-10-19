<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
            @yield('navigation')
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                @yield('content')
            </div>
        </main>
    </div>
@include('base.includes.footer')
</body>
</html>