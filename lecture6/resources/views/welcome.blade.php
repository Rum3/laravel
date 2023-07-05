<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <h1>Currency - Exchange Rate</h1>
        @foreach($exchangeRates as $currency => $rate)
        <tr>
            <td>{{ $currency }}</td>
            <td>{{ $rate }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>