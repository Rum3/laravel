<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Todo List</title>
</head>
<body>
    <div>
        <div>
            <div>
                <h3>To-do List</h3>
                <form action="{{ route('store')}}" method="POST" autocomplete="off">
                    @csrf
                        <div>
                            <input type="text" name="content">
                            <button type="submit" class="add">ADD</button>
                        </div>
                </form>
                @if(count($todolists))
                <ul>    
                    @foreach($todolists as $todolist)
                        <li class="list-group-item">
                        <form action="{{ route('destroy', ['todolist' => $todolist->id]) }}" method="POST">
                            {{$todolist->content}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="delete">DELETE </button>
                                <a class="btn" href="{{ route('edit', ['id' => $todolist->id]) }}">EDIT</a>
                            </form>
                           

                        </li>
                    @endforeach
                </ul>
                @else
                <p>No tasks</p>
                @endif
            </div>
            @if(count($todolists))
            <div>
                You have {{ count($todolists)}} pending tasks
            </div>
                @else
                @endif
        </div>
    </div>
</body>
</html>