<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Alert;
class TaskController extends Controller
{
    
    public function index(){

        $tasks = Task::where("iscompleted", 0)->orderBy("id", "DESC")->get();
        $completed_tasks = Task::where("iscompleted", 1)->get();
        return view("welcome", compact("tasks", "completed_tasks"));
        }

        
        public function store(Request $request)
        {
        $input = $request->all();
        $task = new Task();
        $task->task =$request->task;
        $task->save();
        return redirect()->back()->with("message", "Task has been added");
        }
        public function complete($id)
        {
        $task = Task::find($id);
        $task->iscompleted = 1;
        $task->save();
        return redirect()->back()->with("message", "Task has been added to completed list");
        }
        public function destroy($id)
        {
        $task = Task::find($id);
        $task->delete();
        return redirect()->back()->with('message', "Task has been deleted");
        }
    
}
