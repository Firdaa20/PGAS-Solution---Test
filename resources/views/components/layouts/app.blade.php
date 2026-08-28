<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Employee' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50 text-gray-800">

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}

    <aside class="w-64 bg-gray-900 text-white min-h-screen">

        <div class="h-16 flex items-center px-6 border-b border-gray-700">

            <div>

                <h1 class="text-lg font-bold">
                    Spendify
                </h1>

                <p class="text-xs text-gray-400">
                    Spending Management
                </p>

            </div>

        </div>


        <nav class="p-4 space-y-1">

            <a href="/"
               class="block px-4 py-3 rounded-lg hover:bg-gray-800">

                📊 Dashboard

            </a>


            <a href="/employees"
               class="block px-4 py-3 rounded-lg hover:bg-gray-800">

                👥 Employees

            </a>


            <a href="/departments"
               class="block px-4 py-3 rounded-lg hover:bg-gray-800">

                🏢 Departments

            </a>


            <a href="/spendings"
               class="block px-4 py-3 rounded-lg hover:bg-gray-800">

                💳 Spendings

            </a>


            <a href="/reports"
               class="block px-4 py-3 rounded-lg hover:bg-gray-800">

                📈 Spending Report

            </a>

        </nav>

    </aside>


    {{-- MAIN --}}

    <main class="flex-1">

        <header class="h-16 bg-white border-b
                       flex items-center justify-between px-8">

            <h2 class="font-semibold text-gray-800">

                {{ $title ?? 'Dashboard' }}

            </h2>


            <div class="flex items-center gap-3">

                <div class="text-right">

                    <p class="text-sm font-medium">
                        Administrator
                    </p>

                    <p class="text-xs text-gray-500">
                        Admin
                    </p>

                </div>


                <div class="w-10 h-10 rounded-full bg-blue-100
                            flex items-center justify-center
                            text-blue-600 font-semibold">

                    A

                </div>

            </div>

        </header>


        {{-- PAGE CONTENT --}}

        <div class="p-8">

            {{ $slot }}

        </div>

    </main>

</div>

</body>

</html>