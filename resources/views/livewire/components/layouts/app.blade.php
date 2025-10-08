<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Shillong College Todo' }}</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-gray-900">Shillong College Todo</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="/create-category" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Categories</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <p class="text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Shillong College Todo. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>