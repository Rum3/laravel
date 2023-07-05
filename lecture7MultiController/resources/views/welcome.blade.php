
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Currency - Exchange Rate</h1>
    
    <form action="/" method="GET">
        <input type="text" name="search" placeholder="Search by currency name">
        <button type="submit">търси</button>
        <button type="submit">изчисти</button>
    </form>

    <table>
        <tr>
            <th>Currency</th>
            <th>Rate</th>
        </tr>
        @foreach($exchangeName as $currency => $rate)
        <tr>
            <td>{{ $currency }}</td>
            <td>{{ $rate }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>