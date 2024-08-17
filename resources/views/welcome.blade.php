<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Event Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black font-sans antialiased">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <!-- Navigation Links -->
        <div class="fixed top-0 right-0 p-6">
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/events') }}" class="text-sm font-semibold underline">Events</a>
                    @else
                    <a href="{{ url('/events') }}" class="text-sm font-semibold underline">Events</a>
                        <a href="{{ route('login') }}" class="text-sm font-semibold underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm font-semibold underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <x-application-logo/>

        <!-- Main Content -->
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
            <h1 class="text-4xl font-bold mb-6 text-center">About Us</h1>
            <p class="text-lg leading-relaxed mb-4">
                Welcome to the Event Management System of the Faculty of Letters and Human Sciences. This platform is designed to streamline the organization and management of events, making it easier for students, faculty, and staff to participate and stay informed.
            </p>
            <p class="text-lg leading-relaxed mb-4">
                Our mission is to enhance the academic and cultural life of our faculty by providing a centralized system for event management. Whether it’s a seminar, workshop, or cultural event, this platform ensures that everything runs smoothly and efficiently.
            </p>
            <p class="text-lg leading-relaxed">
                We believe in fostering a vibrant community where ideas and cultures can be exchanged. Our event management system is a step towards achieving this goal by making it easier to organize, promote, and participate in events that enrich our academic environment.
            </p>
        </div>
    </div>
</body>
</html>
