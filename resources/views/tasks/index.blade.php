@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">My Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Add Task</a>
</div>

<div class="bg-white shadow overflow-hidden sm:rounded-md">
    <ul class="divide-y divide-gray-200">
        @forelse($tasks as $task)
            <li>
                <div class="px-4 py-4 flex items-center justify-between sm:px-6">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center">
                            <h3 class="text-lg font-medium text-indigo-600 truncate {{ $task->is_completed ? 'line-through text-gray-400' : '' }}">
                                {{ $task->title }}
                            </h3>
                            @if($task->is_completed)
                                <span class="ml-2 px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Done</span>
                            @endif
                        </div>
                        <p class="text-sm text-gray-500">{{ $task->description }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('tasks.edit', $task) }}" class="text-indigo-600 hover:text-indigo-900 text-sm font-semibold">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-semibold">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @empty
            <li class="px-4 py-8 text-center text-gray-500">No tasks found. Start by creating one!</li>
        @endforelse
    </ul>
</div>
@endsection
