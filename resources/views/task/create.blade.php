@extends('task.master')

@section('content')
    
<div class="container">


   
    <h1>Create your TASK</h1>
   
    <form action="/upload" method="post" autocomplete="off">
      
            @csrf
            <div class="input-group">
        <input type="text" name="task" class="form-control" placeholder="Add your new task">
            <button type=submit class="btn btn-primary btn-sm px-4"><i class="fa fa-plus"></i>Create</button>
        </div>
        </form>

        @error('task')
    <div class="text-danger">{{$message}}</div>
@enderror
    <div class="">
        <a href="/" class="btn btn-primary float px-4"><i class="fa fa-arrow-left"></i>Back</a>
    </div>
</div>
   
@endsection
