<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    h1 {
        text-align: center;
        margin-top: 50px;
        color: #333;
    }

    div {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    button {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #555;
    }
</style>
</head>
<body>
@include('navbar')
<div style="text-align: right;">
    @auth
    <div class="logout-container">
      <h1>Welcome, {{ auth()->user()->name }}</h1>
      <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </div>
    @else
    <div>
      <span>You are not logged in.</span>
    </div>
</div>
<div>
    <div>
        <form action="/register" method="GET">
            <label for="reg">Регистрация</label>
            <button name="reg" type="submit">регистрация</button>
        </form>
    </div>

    <div>
        <form action="/login" method="GET">
            <label for="log">Вход</label>
            <button name="log" type="submit">Вход</button>
        </form>
    </div>

</div>
@endauth
<h1>Имаме колкото искате книги</h1>
</body>
</html>
