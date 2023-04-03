<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function store(Request $request): string
    {
        $todo = new Todo();
        if (!empty($request->todo)) $todo->todo = $request->todo;
        $todo->save();

        return 'Todo Added!';
    }
}
