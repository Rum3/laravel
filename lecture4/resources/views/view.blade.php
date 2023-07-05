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
    <input type="float" name="amount" id="amount" required>
    <button type="submit">Конвертирай</button>
</form>

@if (session('amountEuro'))
    <p>Резултат: {{ session('amountEuro') }} EUR</p>
@endif


<form action="/convertToLeva" method="POST">
    @csrf
    <label for="amountEuro">Сума в евро:</label>
    <input type="number" value="{{ session('amountEuro') }}" name="amountEuro" id="amountEuro" step="0.01" required>
    <button type="submit">Конвертирай обратно в лева</button>
</form>
@if (session('convertedAmount'))
    <p>Резултат на обратното конвертиране: {{ session('convertedAmount') }} BGN</p>
@endif

</body>
</html>