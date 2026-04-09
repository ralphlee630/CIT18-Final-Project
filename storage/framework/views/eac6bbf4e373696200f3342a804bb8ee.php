
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - TaskManager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-extrabold text-indigo-600 mb-4">TaskManager</h1>
        <p class="text-xl text-gray-600 mb-8">Stay organized and get things done.</p>
        <div class="space-x-4">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('dashboard')); ?>" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700">Go to Dashboard</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-indigo-600 font-semibold">Log In</a>
                <a href="<?php echo e(route('register')); ?>" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700">Get Started</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH /workspaces/codespaces-blank/CIT18-Final-Project/resources/views/welcome.blade.php ENDPATH**/ ?>