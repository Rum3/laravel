<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency - Exchange Rate</title>
</head>
<body>
    <h1>Currency - Exchange Rate</h1>
    
    <form action="/" method="GET">
        <input type="text" name="search" placeholder="Search by currency name">
        <button type="submit">Search</button>
        <button type="submit" formaction="/">Clear</button>
    </form>

    <table>
        <tr>
            <th>Currency</th>
            <th>Rate</th>
        </tr>
        @foreach($exchangeName as $currency)
        <tr>
            <td>{{ $currency->currency_code }}</td>
            <td>{{ $currency->exchange_rate }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
