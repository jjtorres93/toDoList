@extends('layouts.structure')
@section('title', 'All tasks')
@section('navbar-title', 'Show All Task')

@section('content')
    @if (count($tasks) === 0)
        <h1>There is no task available</h1>
    @else
        <h1 class="text-black-800 text-5xl font-bold">Available tasks</h1>
        <section class="task-container flex flex-wrap justify-around">
            @foreach ($tasks as $task)
                <div class="max-w-md py-2 px-8 bg-white shadow-lg rounded-lg my-20">
                    <span class="text-green-600 text-2xl font-semibold">
                        <a href="#">{{ $task->title }}</a>
                    </span>
                    <hr class="mt-4 border-1">
                    <p class="py-3">{{ $task->description }}</p>
                    <div class="flex justify-end">
                        <a href="" class="font-bold text-lg text-blue-500">View</a>
                    </div>
                </div>
            @endforeach
        </section>
        {{ $tasks->links() }}
    @endif
@endsection
