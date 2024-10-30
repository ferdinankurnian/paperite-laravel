<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paperite Layout</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-orange-500">
    <!-- Main container -->
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <aside class="w-20 bg-orange-600 text-white flex flex-col items-center py-6 px-5 space-y-4">
            <div class="text-2xl font-semibold">📄</div> <!-- Icon or Logo -->
            <div class="space-y-3 w-full">
                <!-- Sidebar icons with minimal padding -->
                <button class="w-full flex justify-center py-2 bg-white text-black rounded-lg">🏠</button>
                <button class="w-full flex justify-center py-2 bg-white text-black rounded-lg">👥</button>
                <button class="w-full flex justify-center py-2 bg-white text-black rounded-lg">🔔</button>
                <button class="w-full flex justify-center py-2 bg-white text-black rounded-lg">⚙️</button>
            </div>
        </aside>

        <!-- Main content area -->
        <main class="flex-grow flex flex-col space-y-4 p-6">

            <!-- Top Bar -->
            <div class="bg-white rounded-lg shadow p-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-orange-500">Paperite</h1>
                <a href="{{ route('about') }}">About Paperite</a>
                <a href="{{ route('login') }}">Login</a>
            </div>

            <!-- Notes and content -->
            <div class="flex-grow flex space-x-4">
                <!-- Notes list -->
                <section class="w-1/3 bg-white rounded-lg shadow p-4 flex flex-col space-y-4">
                    <div class="relative">
                        <input type="text" placeholder="Search notes..." class="w-full p-2 rounded-lg border">
                    </div>
                    
                    <!-- Notes item -->
                    <div class="flex flex-col space-y-4">
                        <!-- Note 1 -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <h2 class="font-semibold">This is first note from Paperite!</h2>
                            <p class="text-sm text-gray-500">Si tu peux aller au là</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <span class="bg-blue-200 text-blue-700 px-2 py-1 text-xs rounded-full">#test</span>
                                <span class="bg-blue-200 text-blue-700 px-2 py-1 text-xs rounded-full">#fragile</span>
                            </div>
                        </div>

                        <!-- Repeat Notes -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <h2 class="font-semibold">This is first note from Paperite!</h2>
                            <p class="text-sm text-gray-500">Si tu peux aller au là</p>
                            <div class="flex items-center mt-2 space-x-2">
                                <span class="bg-blue-200 text-blue-700 px-2 py-1 text-xs rounded-full">#test</span>
                                <span class="bg-blue-200 text-blue-700 px-2 py-1 text-xs rounded-full">#fragile</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Note content panel -->
                <section class="flex-grow bg-white rounded-lg shadow p-4">
                    <h2 class="text-lg font-bold">Welcome to Paperite!</h2>
                    <p class="text-sm text-gray-600">Create a new note or open your existing note.</p>
                </section>

                <!-- Extra panel -->
                <aside class="w-1/6 bg-white rounded-lg shadow p-4 flex items-center justify-center">
                    <h2 class="text-lg font-bold">Test</h2>
                </aside>
            </div>
        </main>

    </div>
</body>
</html>
