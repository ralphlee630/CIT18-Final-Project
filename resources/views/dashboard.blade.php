@extends('layouts.app')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="text-2xl font-bold mb-4">Hello, {{ auth()->user()->name }}!</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-indigo-50 p-4 rounded-lg">
                    <p class="text-sm text-indigo-600 font-semibold uppercase">Total Tasks</p>
                    <p class="text-3xl font-bold">{{ $taskCount }}</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <p class="text-sm text-green-600 font-semibold uppercase">Completed</p>
                    <p class="text-3xl font-bold">{{ $completedCount }}</p>
                </div>
            </div>
            <div class="mt-6">
                <a href="{{ route('tasks.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded">View My Tasks</a>
            </div>
        </div>
    </div>
@endsection
