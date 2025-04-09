<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Platform Belajar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <x-navbar />
    <div class="min-h-screen">
        @yield('content')
    </div>

</body>

</html>
