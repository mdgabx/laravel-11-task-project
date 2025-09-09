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

    <nav class="my-4">
        <a class="link" href="{{ route('tasks.create') }}">Add Task</a>
    </nav>

    @forelse ($tasks as $task)
        <div class="my-4">
            <a @class([
                'line-through' => $task->completed,
            ])
                href="{{ route('tasks.show', [
                    'task' => $task->id,
                ]) }}">
                {{ $task->title }}
            </a>
        </div>
    @empty
        <p>Dont have any</p>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
