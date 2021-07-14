<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        //fetch all todos from database
        //display them in the todos.index page
        //modle is incharge of communicating with table in the database.
        
        //getting all the todos from the Todo table
        // $todos=Todo::all()

        //with the "with" we are passing the data ie todos with its key ie 'todo'
        // return view ('todos.index').with('todos',$todos);
        return view ('todos.index')->with('todos',Todo::all());
    }
}

