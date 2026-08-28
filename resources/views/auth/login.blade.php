<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login - Spendify</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md">

        <div class="text-center mb-8">

            <h1 class="text-3xl font-bold text-gray-900">
                Spendify
            </h1>

            <p class="text-gray-500 mt-2">
                Spending Management System
            </p>

        </div>


        <div class="bg-white rounded-2xl shadow-sm
                    border p-8">

            <h2 class="text-xl font-semibold mb-6">
                Sign In
            </h2>


<form method="POST" action="{{ route('login') }}">

    @csrf

    <div class="mb-5">

        <label class="block text-sm font-medium mb-2">
            Email
        </label>

        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Enter your email"
            required
            class="w-full border rounded-lg
                   px-4 py-3
                   focus:ring-2
                   focus:ring-blue-500"
        >

    </div>


    <div class="mb-6">

        <label class="block text-sm font-medium mb-2">
            Password
        </label>

        <input
            type="password"
            name="password"
            placeholder="Enter your password"
            required
            class="w-full border rounded-lg
                   px-4 py-3
                   focus:ring-2
                   focus:ring-blue-500"
        >

    </div>


    @if ($errors->any())

        <div class="mb-5 bg-red-50 border border-red-200
                    text-red-600 rounded-lg px-4 py-3 text-sm">

            {{ $errors->first() }}

        </div>

    @endif


    <button
        type="submit"
        class="w-full bg-blue-600
               text-white py-3 rounded-lg
               font-medium
               hover:bg-blue-700">

        Sign In

    </button>

</form>

        </div>


        <p class="text-center text-xs text-gray-400 mt-6">
            © 2026 Spendify
        </p>

    </div>

</div>

</body>

</html>