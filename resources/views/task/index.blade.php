@extends('task.master')

@section('content')



    <div class="container">
    <h1>Tasks</h1>
    <h3>
        <div class="align-center">
            <a href="/create" class="btn btn-primary float px-5"><i class="fa fa-plus"></i>Create Task</a>
        </div>
        
    </h3>
    
    @foreach($tasks as $task)
        <li>
            @if($task->iscompleted)
                <span style="text-decoration:line-through">{{$task->task}}</span>
            @else 
                {{$task->task}}
            @endif
            <a href="{{asset('/' . $task->id . '/edit')}}">Edit</a>
            <a href="{{asset('/' . $task->id . '/iscompleted')}}">iscompleted</a>
            <a href="{{asset('/' . $task->id . '/delete')}}">Delete</a>
        </li>
    @endforeach
  
</div>
@endsection