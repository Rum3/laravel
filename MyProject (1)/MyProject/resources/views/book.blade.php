<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/books.css')}}">
    <title>Колекция книги</title>
</head>
<body>
    <h1>Колекция книги</h1>
    <h2><a href="/">Начална страница</a></h2>
    <form action="/search" method="GET">
    <input type="text" name="title" placeholder="заглавие">
    <button type="submit">Търси</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Заглавие</th>
                <th>Автор</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price}}</td>
                <td>

                <form action="/delete/{{ $book->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-danger" type="submit">Изтрий</button>
                </form>

                    <a class="btn" href="/edit/{{ $book->id }}">Редактирай</a>
                </td>
            </tr>
            @endforeach
            @if(count($books))
            <h3>Има {{ count($books) }} книги в библиотеката</h3>
            @endif
        </tbody>
    </table>
    @if(session('message'))
    <div style="position:absolute; left:40%; top:70%;">{{ session('success') }}</div>
    @endif
</body>
</html>
