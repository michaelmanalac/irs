<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('base.includes.header')
</head>
<body>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--8--col">
            <table style="width: 100%;" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Name</th>
                    <th class="mdl-data-table__cell--non-numeric">Email</th>
                    <th class="mdl-data-table__cell--non-numeric">Contact</th>
                </tr>
                </thead>
                <tbody>
                @foreach($accounts->all() as $account)
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">{{ $account->first_name }} {{ $account->last_name }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $account->email }}</td>
                        <td class="mdl-data-table__cell--non-numeric">{{ $account->contact }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>