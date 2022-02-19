<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

/*
 * M - Model
 * V - View
 * C - Controller
 *
 * M (banco) -> C -> V (visualiza)
 */

class TodoController extends Controller
{
    public function store(Request $request)
    {
        //['title' => 'cu'];
        $data =  $request->all();

        //$keven->username = 'keven';

        $todo = new Todo(); // Todo = objeto, um objeto tem propiedades, title e completed são propiedades de Todo

        $todo->title = $data['title'];

        $todo->completed = false;

        $todo->save();

        return redirect('/');
    }

    public function index()
    {
        $data = Todo::all();
        return view('welcome', ['todos' => $data]);
    }

    public function status(int $id)
    {
        $todo = Todo::find($id);

        $todo->completed = true;

        $todo->save();

        return redirect('/');
    }

    public function statusback(int $id)
    {
        $todo = Todo::find($id);

        $todo->completed = false;

        $todo->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect('/');
    }
}


