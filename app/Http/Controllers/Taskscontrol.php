<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\task;

class Taskscontrol extends Controller
{
    public function getTask(Request $request, $id)
    {
        if($id <= 0)
        {
            return view('NotFound');
        }
        $tasks = new task;
        try{
            $task = $tasks->where('id_task', $id)->firstOrFail();
            return view('task', ['task_id' => $id, 'task_text'=>$task->text]);
        }catch (ModelNotFoundException $e)
        {
            return view('NotFound');
        }


    }
}
