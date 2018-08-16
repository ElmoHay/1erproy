<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class ShowAll extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $tasks = Task::orderBy('created_at', 'asc')->get();
      return view('tasks', [
        'tasks' => $tasks
      ]);
    }
}
