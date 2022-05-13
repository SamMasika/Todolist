<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Alert;
class TaskController extends Controller
{
    
        public function index(){
            $tasks =Task::orderBy('iscompleted')->get();
            return view('task.index')->with(['tasks' => $tasks]);
        }
    
        public function create(){
            return view('task.create');
        }
    
        public function upload(Request $request){
            $request->validate([
                'task' => 'required|max:255'
            ]);
            $task = $request->task;
           Task::create(['task' => $task]);
           toast( "Task created successfully!",'success');
            return redirect('/');
        }
    
        public function edit($id){
            $task =Task::find($id);
            return view('task.edit')->with(['id' => $id, 'task' => $task]);
        }
    
        public function update(Request $request){
            $request->validate([
                'task' => 'required|max:255'
            ]);
            $updatetask =Task::find($request->id);
            $updatetask->update(['task' => $request->task]);
            toast( "Task updated successfully!",'success');
            return redirect('/');
        }
    
        public function iscompleted($id){
            $task =Task::find($id);
            if ($task->iscompleted){
                $task->update(['iscompleted' => false]);
                toast( "Task is marked as incomplete!",'success');
                return redirect()->back();
            }else {
                $task->update(['iscompleted' => true]);
                toast( "Task is marked as incomplete!",'success');
                return redirect()->back();
            }
        }
    
        public function delete($id){
            $task =Task::find($id);
            $task->delete();
            toast( "Task deleted successfully!",'success');
            return redirect()->back();
        }
    }
    

