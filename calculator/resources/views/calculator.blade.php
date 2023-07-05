<!DOCTYPE html>
<html>
<head>
    <title>Калкулатор</title>
</head>
<body>
    <h1>Калкулатор</h1>

    @if(isset($result))
        <p>Резултат: {{ $result }}</p>
    @endif

    <form action="/calculate" method="post">
        @csrf
        <input type="text" name="num1" placeholder="Първо число" required>
        <select name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Второ число" required>
        <button type="submit">Изчисли</button>
    </form>
</body>
</html>