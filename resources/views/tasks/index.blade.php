@extends('layouts.app')

@section('content')

    
    
   @if (count($tasks) > 0)
   <table class="table table-striped">
       
       <thead>
           
           <tr>
               <th>id</th>
               <th>タスク</th>
           </tr>
           
       </thead>
       <tbody>
           @foreach ($tasks as $task)
           <tr>
               <td>{{$task->id}}</td>
               <td>{{$task->content}}</td>
               
           </tr>
           @endforeach
       </tbody>
   </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの追加', [],['class' => 'btn btn-praimary']) !!}
    
    @foreach ($tasks as $task)
    
    <tr>
        <td>{!! link_to_route('tasks.show', $message->id, ['id' => $task->id]) !!}</td>
        <td>{{ $tasks->content }}</td>
        
        
    </tr>
    @endforeach
@endsection