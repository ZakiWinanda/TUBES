<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-yellow-500 h-screen flex justify-center items-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-80">
            <div class="text-center mb-6">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="mx-auto w-24 h-24 mb-4">
                <h4 class="text-lg font-bold text-black">ShoppingPedia</h4>
            </div>
            <hr class="mb-6">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <input id="name" type="text" name="name" placeholder="Enter Your Name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="text-sm text-red-500 mt-2 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input id="email" type="email" name="email" placeholder="Enter Your Email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-sm text-red-500 mt-2 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input id="password" type="password" name="password" placeholder="Enter Your Password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('password') border-red-500 @enderror"
                        required>
                    @error('password')
                        <span class="text-sm text-red-500 mt-2 block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input id="password-confirm" type="password" name="password_confirmation"
                        placeholder="Confirm Your Password" class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                        required>
                </div>
                
                <hr class="my-6">
                <button type="submit"
                    class="w-full py-2 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 transition">
                    Register
                </button>
            </form>
        </div>
    </div>
</body>

</html>
