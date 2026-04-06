<nav class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="text-xl font-bold text-white">TaskManager</a>
                @auth
                <div class="hidden sm:flex sm:space-x-8 ml-10">
                    <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white text-sm font-medium">Dashboard</a>
                    <a href="{{ route('tasks.index') }}" class="text-gray-300 hover:text-white text-sm font-medium">My Tasks</a>
                    <a href="{{ route('tasks.create') }}" class="text-gray-300 hover:text-white text-sm font-medium">Create Task</a>
                </div>
                @endauth
            </div>
            <div class="flex items-center">
                @auth
                    <span class="text-gray-300 text-sm mr-4">{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-sm font-medium mr-4">Log In</a>
                    <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2 rounded">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
