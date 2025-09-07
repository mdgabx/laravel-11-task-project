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
@endsection
