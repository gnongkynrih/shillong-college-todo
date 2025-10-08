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
  
    <h3>Shillong College</h3>
    <div>
      {{ $slot }}
    </div>
    
    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
