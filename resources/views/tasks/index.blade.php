@extends('layouts.app')

@section('content')

@if (Auth::check())

    @if (count($tasks) > 0)
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>id</th>
                   <th>タスク</th>
                   <th>ステータス</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($tasks as $task)
               <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{$task->content}}</td>
                    <td> {{$task->status}}</td>
               </tr>
               @endforeach
           </tbody>
       </table>
    @endif
    {!! link_to_route('tasks.create', '新規タスクを作成', [], ['class' => 'btn btn-primary']) !!}
    
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the TasksApp</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}
        </div>
    </div>
@endif
    
@endsection