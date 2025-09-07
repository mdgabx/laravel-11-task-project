@extends('layouts.app')

@section('title', ' List of Tasks')

@section('content')
    {{-- @if (count($tasks))
       @foreach ($tasks as $task)
            <div>{{  $task->title }}</div>
       @endforeach
    @else
        <p>Dont have any</p>
    @endif --}}

    <div>
        <a href="{{ route('tasks.create') }}">Add Task</a>
    </div>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', [
                'task' => $task->id,
            ]) }}">
                {{ $task->title }}
            </a>
        </div>
    @empty
        <p>Dont have any</p>
    @endforelse

    @if($tasks->count())
       <nav>
        {{ $tasks->links() }}
       </nav>
    @endif
@endsection
