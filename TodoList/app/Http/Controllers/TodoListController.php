<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
   
    public function index()
    {
        $todolists = TodoList::all();
        return view('home', compact('todolists'));
    }



   
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);
        Todolist::create($data);
        return back();
    }

 
    
    public function destroy(TodoList $todolist)
    {
        $todolist->delete();
        return back();
    }
    
    public function edit($id)
    {
        $todolist = TodoList::findOrFail($id);
        return view('edit', compact('todolist'));
    }

    public function update(Request $request, $id)
    {
        $todolist = TodoList::findOrFail($id);
        $todolist->content = $request->input('content');
        $todolist->save();

        return redirect()->route('index')->with('success', 'Задачата е успешно променета.');
    }

}
