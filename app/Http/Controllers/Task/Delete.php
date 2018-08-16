<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class Delete extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
      Task::findOrFail($id)->delete();
      return redirect('/');
    }
}
