<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        //fetch all todos from database
        //display them in the todos.index page
        //modle is incharge of communicating with table in the database.

        //getting all the todos from the Todo table
        // $todos=Todo::all()

        //with the "with" we are passing the data ie todos with its key ie 'todo'
        // return view ('todos.index').with('todos',$todos);
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId)
    {
        // Laravel's dd() function can be defined as a helper function, 
        // which is used to dump a variable's contents
        //  to the browser and prevent the further script execution
        // dd($todoId);

        $todo = Todo::find($todoId);


        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
          ]);

        // dd(request()->all());
        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
  
        $todo->save();
  
        return redirect('/todos');
    }

    public function edit($todoId)
    {
      $todo = Todo::find($todoId);

      return view('todos.edit')->with('todo', $todo);
    }

    public function update($todoId)
    {
      $this->validate(request(), [
        'name' => 'required|min:6|max:12',
        'description' => 'required'
      ]);

      $data = request()->all();

      $todo = Todo::find($todoId);

      $todo->name = $data['name'];
      $todo->description = $data['description'];

      $todo->save();

      return redirect('/todos');
    }

    public function destroy($todoId)
    {
      $todo = Todo::find($todoId);

      $todo->delete();

      return redirect('/todos');
    }
}
