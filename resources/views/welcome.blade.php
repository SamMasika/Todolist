@extends("layouts.app")
@section("content")

<div class="container">
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Done !!! </strong>{{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            New Task
        </div>

        <div class="panel-body">
<form method="POST" action={{url('/task')}}>
    @csrf
        <div class="input-group">
        <input type="text" class="form-control" name="task" placeholder="Enter Task">
<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add</button>
            </div>
            </form>
        </div>
    </div>
    <div class="">Current Tasks</div>
<hr>
<ol>
@foreach($tasks as $task)
<li><a href ={{url('/'.$task->id.'/complete')}}>{{ $task->task }}</a></li>
@endforeach
</ol>
<h4>Completed Tasks</h4>
<ol>
@foreach($completed_tasks as $c_task)
<li><a href ={{url('/'.$c_task->id.'/delete')}}>{{ $c_task->task }}</a></li>
@endforeach
</ol>
</div>
</div>
@endsection