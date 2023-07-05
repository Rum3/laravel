<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Търсене на книга</title>
</head>
<body>
    <h1>Търсене на книга</h1>

    <form action="{{ route('books.search') }}" method="GET">
        <label for="search">Търси по заглавие:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Търси</button>
    </form>
</body>
</html>