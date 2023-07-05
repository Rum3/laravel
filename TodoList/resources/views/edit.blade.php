<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Промени задача</title>
</head>
<body>
    <div>
        <div>
            <div>
                <h3>Промени задача</h3>
                <form action="{{ route('update', ['id' => $todolist->id]) }}" method="POST" autocomplete="off">
                    @csrf
                    @method('put')
                    <div>
                        <input type="text" name="content" value="{{ $todolist->content }}">
                        <button type="submit" class="save">ЗАПАЗИ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>