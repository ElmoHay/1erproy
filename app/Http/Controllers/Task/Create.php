<?php

namespace App\Http\Controllers\Task;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class Create extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
      ]);

      if ($validator->fails()) {
        return redirect('/')
          ->withInput()
          ->withErrors($validator);
        }
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }
}
