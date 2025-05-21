<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function index()
    {
        $todos = $this->todo->all();
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
        $this->todo->fill($inputs);
        $this->todo->save();
        // dd($inputs);

        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        $model = $this->todo->find($id);
        
        // dd($id);
        return view('todo.show', ['todo' => $model]);
    }

    public function edit($id)
    {
        $todo = $this->todo->find($id);
        // dd($todo);

        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(Request $request, $id)
    {
        $inputs = $request->all();
        // @dd($inputs);
        $todo = $this->todo->find($id);
        // @dd($todo);
        $todo->fill($inputs)->save();
        // @dd($todo->fill($inputs));

        return redirect()->route('todo.show', $todo->id);
    }

}
