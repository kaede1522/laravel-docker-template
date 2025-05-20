<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        // dd($todos);
        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $todo = new Todo();
        $todo->fill($inputs);
        // dd($inputs);
        $todo->save();

        return redirect()->route('todo.index');
    }

}
