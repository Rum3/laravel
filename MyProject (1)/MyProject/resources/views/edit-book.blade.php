<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>Добави нова книга</h1>
    <h2><a href="/">Начална станица</a></h2>
    <div>
    <form method="POST" action="/books/{{ $book->id }}">
    @csrf
    @method('PUT')
         <div>
            <label for="title">Заглавие</label>
            <input name="title" type="text" id="title" value="{{ $book->title }}">
        </div>
        <div>
            <label for="author">Автор</label>
            <input name="author" type="text" id="author" value="{{ $book->author }}">
        </div>
        <div>
            <label for="price">Цена</label>
            <input name="price" type="float" id="price" value="{{ $book->price }}">
        </div>
        <div>
        <button type="submit">Редактирай</button>
        </div>
    </form>
    </div>
    @if(session('message'))
    <div style="position:absolute; left:40%; top:70%;">{{ session('success') }}</div>
    @endif

</body>
</html>
