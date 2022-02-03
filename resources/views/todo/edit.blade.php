@extends('layouts.app')

@section('content')
    <div class="todo-section" style="width: 100%; height: 100%;">
       <div class="todo-form" style="width: 100%; display:flex; justify-content:center; align-items:center;">
           <div>
                <h1>To do App</h1>

                <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                @method('PUT')    
                @csrf
                <div>
                    <input type="text" name="title" value="{{ $todo->title }}">
                </div>
                <button type="submit">Submit</button>
                </form>
               
           </div>

       </div>
       
    </div>
@endsection