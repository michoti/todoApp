@extends('layouts.app')

@section('content')
    <div class="todo-section" style="width: 100%; height: 100%;">
       <div class="todo-form" style="width: 100%; display:flex; justify-content:center; align-items:center;">
           <div>
                <h1>To do App</h1>

                <form action="{{ route('todo.store') }}" method="POST">
                @csrf
                <div>
                    <input type="text" name="title">
                </div>
                <button type="submit">Submit</button>
                </form>

                <div>
                    <h3>My list:</h3>
                    <div>
                        @foreach ($todos as $todo)
        
                                <div class="todo-item" style="width: 100%;">
                                        <p> @if ($todo->completed == 0)
                                            <span style="color: red;">uncompleted</span>
                                            @else
                                            <span style="color: green;">completed</span>                        
                                        @endif {{$todo->title}}</p>
                                        <div style="display: flex; flex-direction:row; align-items: center;">
                                            @if ($todo->completed == 0)
        
                                            <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <input type="text" name="completed" value="1" hidden>
                                                <button type="submit" style="background: #00cc00; color: #ffffff; border: 0;">Mark as completed</button>
                                            </form>
                                                
                                            @else
        
        
                                            <form action="{{ route('todo.update', $todo->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <input type="text" name="completed" value="0" hidden>
                                                <button type="submit" style="background: #ff3333; color: #ffffff; border: 0;">Mark as uncompleted</button>
                                            </form>
                                                
                                            @endif
                                            <a href="{{ route('todo.edit', $todo->id) }}"><button style="border: 0;">edit</button></a>
                                            <form action="{{ route('todo.destroy', $todo->id)}}" method="POST">
                                                  @method('DELETE')
                                                  @csrf
                                                  <input type="text" hidden>
                                                  <button style="display:block; background: #ff3333; color:#ffffff; border: 0;">delete</button>
                                            </form>
                                        </div>
                                </div>
                            
                        @endforeach
                    </div>
               </div>
           </div>

       </div>
       
    </div>
@endsection