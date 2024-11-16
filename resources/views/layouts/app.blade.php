<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel App' }}</title>
    @vite('resources/css/app.css') <!-- Include your CSS -->
</head>
<body>
    <header>
        <!-- Add a navbar or header content here -->
    </header>
    
    <main>
        @yield('content') <!-- This is where page-specific content will go -->
    </main>
    
    <footer>
        <!-- Add a footer here -->
    </footer>
</body>
</html>
