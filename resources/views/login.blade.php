<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-orange-300 to-orange-600 flex justify-center items-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
        <h1 class="text-2xl font-semibold text-orange-500 mb-6">Login</h1>
        <form>
            <input type="email" class="w-full px-4 py-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" name="username" id="username" placeholder="Username" required>
            <input type="password" class="w-full px-4 py-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Password" name="password" id="password" required>
            <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-lg hover:bg-orange-600 transition duration-200">Log In</button>
            <a href="#" class="block mt-4 text-orange-500 text-sm hover:underline">Forgot password?</a>
            <a href="{{ route('home') }}" class="block mt-4 text-orange-500 text-sm hover:underline">Back to Home</a>
        </form>
    </div>

</body>
</html>
