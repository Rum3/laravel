<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/convert" method="POST">
    @csrf
    <label for="amount">Сума в лева:</label>
    <input type="number" name="amount" id="amount" step="0.01" required>
    <button type="submit">Конвертирай</button>
</form>

@if (session('convertedAmount'))
    <p>Резултат: {{ session('convertedAmount') }} EUR</p>
@endif
</body>
</html>