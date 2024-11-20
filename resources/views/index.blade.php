<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paperite</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-orange-500 font-sans text-white">

    <!-- Navbar -->
    <header class="flex justify-between items-center p-4 bg-orange-500 text-white">
        <h1 class="text-2xl font-semibold">Paperite</h1>
        <nav class="space-x-6">
            <a href="#" class="text-white hover:text-gray-300">About</a>
            <a href="#" class="text-white hover:text-gray-300">Features</a>
            <a href="#" class="text-white hover:text-gray-300">Help</a>
            <a href="#" class="bg-white text-orange-500 px-4 py-2 rounded-md font-semibold hover:bg-gray-100">Open App</a>
        </nav>
    </header>

    <!-- Welcome Section -->
    <section class="text-center p-16 bg-orange-500">
        <h2 class="text-3xl font-bold mb-4">Welcome to Paperite!</h2>
        <p class="text-white max-w-xl mx-auto mb-8">
            Nunc mattis turpis ut blandit placerat. Nullam non magna auctor justo luctus mollis. Duis interdum massa et
            lacus ultricies. Aliquam ultrices tristique diam, in malesuada eros dictum id. Quis quisque quis dui sit
            amet justo pretium sollicitudin. Sed pellentesque egestas tortor, ut lobortis ex commodo hendrerit.
        </p>
        <div class="flex justify-center">
            <div class="bg-white w-16 h-16 rounded-lg p-4 flex justify-center items-center">
                <img src="icon.png" alt="Icon" class="w-full">
            </div>
        </div>
    </section>

    <!-- PaperSpace Section -->
    <section class="bg-orange-400 text-white text-center py-16">
        <h3 class="text-2xl font-semibold mb-4">Introducing,</h3>
        <h2 class="text-3xl font-bold mb-2">PaperSpace</h2>
        <p class="text-lg">A place for your notes</p>
        <div class="mt-8 flex justify-center">
            <div class="bg-white text-black p-4 rounded-lg shadow-lg max-w-xs">
                <h4 class="font-semibold mb-2">Your PaperSpace</h4>
                <ul class="text-sm space-y-2">
                    <li>All Notes</li>
                    <li>Unlimited Notes</li>
                    <li>A Random Idea</li>
                    <li>Electronics</li>
                    <li>Groceries List</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Collaboration Section -->
    <section class="bg-orange-300 text-center py-16 flex flex-col items-center">
        <div class="bg-white text-black p-6 rounded-lg shadow-lg max-w-md mb-8">
            <h4 class="font-semibold mb-2">Macrofunction</h4>
            <p class="text-sm mb-4">
                This note explained about Macrofunction, how to use it, etc. This note is intended for anyone that
                wanted to read it.
            </p>
            <div class="flex items-center justify-between">
                <span class="text-red-600">🔴</span>
                <span class="text-blue-600">🔵</span>
                <span class="text-sm">Macrofunction Explained</span>
            </div>
        </div>
        <h2 class="text-3xl font-bold mb-4">Collaborate with your team</h2>
        <p class="text-white">Collaborate your notes with your team to share</p>
    </section>

    <!-- Voice Notes Section -->
    <section class="bg-white text-orange-500 py-16 text-center">
        <h3 class="text-2xl font-bold mb-4">Add Voice to your note</h3>
        <div class="flex flex-col items-center space-y-4">
            <div class="bg-orange-100 w-80 p-4 rounded-lg flex items-center space-x-4">
                <button class="bg-orange-500 text-white p-2 rounded-full">▶</button>
                <div class="flex-1">Macrofunction Explained</div>
                <span class="text-xs">2:05</span>
            </div>
            <div class="bg-orange-100 w-80 p-4 rounded-lg flex items-center space-x-4">
                <button class="bg-orange-500 text-white p-2 rounded-full">▶</button>
                <div class="flex-1">How to use</div>
                <span class="text-xs">1:35</span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-orange-500 text-center p-4 text-white">
        <p>Paperite</p>
        <p>Copyright © 2024 Avaid Studio</p>
    </footer>

</body>
</html>
