<nav class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="<?php echo e(route('dashboard')); ?>" class="text-xl font-bold text-white">TaskManager</a>
                <?php if(auth()->guard()->check()): ?>
                <div class="hidden sm:flex sm:space-x-8 ml-10">
                    <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-300 hover:text-white text-sm font-medium">Dashboard</a>
                    <a href="<?php echo e(route('tasks.index')); ?>" class="text-gray-300 hover:text-white text-sm font-medium">My Tasks</a>
                    <a href="<?php echo e(route('tasks.create')); ?>" class="text-gray-300 hover:text-white text-sm font-medium">Create Task</a>
                </div>
                <?php endif; ?>
            </div>
            <div class="flex items-center">
                <?php if(auth()->guard()->check()): ?>
                    <span class="text-gray-300 text-sm mr-4"><?php echo e(auth()->user()->name); ?></span>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded">Logout</button>
                    </form>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-gray-300 hover:text-white text-sm font-medium mr-4">Log In</a>
                    <a href="<?php echo e(route('register')); ?>" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2 rounded">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH /workspaces/codespaces-blank/CIT18-Final-Project/resources/views/partials/header.blade.php ENDPATH**/ ?>