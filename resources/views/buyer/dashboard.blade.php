<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <nav class="bg-yellow-600 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="ShoppingPedia Logo" class="h-8 w-8">x
                <div class="text-white text-xl font-semibold">ShoppingPedia</div>
            </div>

            <div class="flex space-x-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-white hover:text-gray-300 underline">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>


    <div class="p-8">

        <h1 class="text-3xl">Welcome to ShoppingPedia</h1>
        <p>buyer dashboard</p>
    </div>
</body>

</html>
