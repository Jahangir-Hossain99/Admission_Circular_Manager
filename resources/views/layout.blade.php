<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Circular Manager</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Roboto', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    @section('header')
    <nav class="bg-blue-700">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center">
            <a class="text-white font-bold text-xl tracking-wide" href="#">Admission Circular Manager</a>
            <div class="ml-auto">
                <a href="{{ route('login') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">Log In</a>
                <a href="{{ route('users.create') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">Register</a>
                <a href="{{ route('circulars.create') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-600">Create Post</a>
        </div>
    </nav>
    @show

    <div class="flex flex-1">
        <aside class="hidden md:block w-64 bg-white shadow min-h-screen py-8">
            <ul class="space-y-2 px-4">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                       class="block px-4 py-2 rounded-lg font-medium transition
                       {{ request()->is('/') ? 'bg-blue-100 text-blue-800' : 'text-blue-700 hover:bg-blue-50' }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/circulars') }}"
                       class="block px-4 py-2 rounded-lg font-medium transition
                       {{ request()->is('circulars*') ? 'bg-blue-100 text-blue-800' : 'text-blue-700 hover:bg-blue-50' }}">
                        Circulars
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}"
                       class="block px-4 py-2 rounded-lg font-medium transition
                       {{ request()->is('departments*') ? 'bg-blue-100 text-blue-800' : 'text-blue-700 hover:bg-blue-50' }}">
                        Users
                    </a>
                </li>
                <li>
                    <a href="{{ url('/settings') }}"
                       class="block px-4 py-2 rounded-lg font-medium transition
                       {{ request()->is('settings*') ? 'bg-blue-100 text-blue-800' : 'text-blue-700 hover:bg-blue-50' }}">
                        Settings
                    </a>
                </li>
            </ul>
        </aside>
        
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
    <footer class="bg-blue-700 text-white text-center py-4 mt-auto">
        &copy; {{ date('Y') }} Admission Circular Manager. All rights reserved.
    </footer>
</body>
</html>
