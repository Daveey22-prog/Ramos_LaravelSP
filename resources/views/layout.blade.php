<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-indigo-600 to-indigo-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    <h1 class="text-white text-2xl font-bold">Student Portal</h1>
                </div>
                <ul class="flex space-x-8">
                    <li>
                        <a href="/" class="text-white hover:text-indigo-200 transition-colors duration-200 font-medium flex items-center space-x-1">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/students" class="text-white hover:text-indigo-200 transition-colors duration-200 font-medium flex items-center space-x-1">
                            <i class="fas fa-list"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="/students/create" class="text-white hover:text-indigo-200 transition-colors duration-200 font-medium flex items-center space-x-1">
                            <i class="fas fa-plus-circle"></i>
                            <span>Add Student</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-800 text-white mt-16 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2026 Student Portal. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>