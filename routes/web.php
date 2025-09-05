<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = Task::latest()->get();

    return view('index', [
    'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    $task = \App\Models\Task::findOrFail($id);

    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

// Route::get('/hello', function () {
//     return "Hello";
// })->name("hello");

// Route::get('/hallo', function () {
//     return redirect()->route("hello");
// });

Route::fallback(function () {
    return 'Route not existing';
});
