@extends('task.master')

@section('content')

<div class="container">
    <h1>Edit your Task</h1>
    
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <div class="input-group">
        <input type="text" name="task" class="form-control"  value="{{$task->task}}"/>
        <input style="display:none" type="number" name="id" value="{{$task->id}}">
        <button type=submit class="btn btn-primary btn-sm px-4"><i class="fa fa-edit"></i>Edit</button>
    </div>
@error('task')
    <div class="text-danger">{{$message}}</div>
@enderror
    
    </form>
    <br>
    <div class="">
        <a href="/" class="btn btn-primary float px-4"><i class="fa fa-arrow-left"></i>Back</a>
    </div>
</div>
    @endsection