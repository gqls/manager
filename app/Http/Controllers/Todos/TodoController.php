<?php

namespace App\Http\Controllers\Todos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function indexAction()
    {
        return view('todos.index');
    }

    public function updateAction()
    {
        return view('todos.update');
    }
}
