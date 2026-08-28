<x-layouts.app>

<div>

    {{-- HEADER --}}

    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-2xl font-bold text-gray-900">
                Dashboard
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Overview of employee spending
            </p>

        </div>

    </div>


    {{-- STAT CARDS --}}

    <div class="grid grid-cols-4 gap-5 mb-8">


        {{-- Employees --}}

        <div class="bg-white rounded-xl border p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Total Employees
                    </p>

                    <h2 class="text-2xl font-bold mt-2">
                        7
                    </h2>

                </div>

                <div class="w-11 h-11 bg-blue-100
                            rounded-lg flex items-center
                            justify-center">

                    👥

                </div>

            </div>

        </div>


        {{-- Departments --}}

        <div class="bg-white rounded-xl border p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Departments
                    </p>

                    <h2 class="text-2xl font-bold mt-2">
                        5
                    </h2>

                </div>

                <div class="w-11 h-11 bg-purple-100
                            rounded-lg flex items-center
                            justify-center">

                    🏢

                </div>

            </div>

        </div>


        {{-- Spending --}}

        <div class="bg-white rounded-xl border p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Total Spending
                    </p>

                    <h2 class="text-xl font-bold mt-2">
                        Rp 37.650.000
                    </h2>

                </div>

                <div class="w-11 h-11 bg-green-100
                            rounded-lg flex items-center
                            justify-center">

                    💰

                </div>

            </div>

        </div>


        {{-- Transactions --}}

        <div class="bg-white rounded-xl border p-5">

            <div class="flex justify-between">

                <div>

                    <p class="text-sm text-gray-500">
                        Transactions
                    </p>

                    <h2 class="text-2xl font-bold mt-2">
                        16
                    </h2>

                </div>

                <div class="w-11 h-11 bg-orange-100
                            rounded-lg flex items-center
                            justify-center">

                    📄

                </div>

            </div>

        </div>

    </div>


    {{-- RECENT SPENDING --}}

    <div class="bg-white border rounded-xl">

        <div class="p-6 border-b">

            <div class="flex justify-between">

                <div>

                    <h2 class="font-semibold">
                        Recent Spending
                    </h2>

                    <p class="text-sm text-gray-500">
                        Latest spending transactions
                    </p>

                </div>

                <a href="#"
                   class="text-sm text-blue-600">

                    View All →

                </a>

            </div>

        </div>


        <div class="overflow-x-auto">

            <table class="w-full text-sm">

                <thead class="bg-gray-50">

                    <tr>

                        <th class="text-left px-6 py-4">
                            Employee
                        </th>

                        <th class="text-left px-6 py-4">
                            Department
                        </th>

                        <th class="text-left px-6 py-4">
                            Date
                        </th>

                        <th class="text-right px-6 py-4">
                            Value
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <tr class="border-t">

                        <td class="px-6 py-4">
                            Andi Pratama
                        </td>

                        <td class="px-6 py-4">
                            Finance
                        </td>

                        <td class="px-6 py-4">
                            15 Jan 2025
                        </td>

                        <td class="px-6 py-4 text-right font-medium">
                            Rp 1.500.000
                        </td>

                    </tr>


                    <tr class="border-t">

                        <td class="px-6 py-4">
                            Citra Lestari
                        </td>

                        <td class="px-6 py-4">
                            Information Technology
                        </td>

                        <td class="px-6 py-4">
                            21 Jun 2025
                        </td>

                        <td class="px-6 py-4 text-right font-medium">
                            Rp 3.750.000
                        </td>

                    </tr>


                    <tr class="border-t">

                        <td class="px-6 py-4">
                            Budi Santoso
                        </td>

                        <td class="px-6 py-4">
                            Human Resources
                        </td>

                        <td class="px-6 py-4">
                            10 Jan 2025
                        </td>

                        <td class="px-6 py-4 text-right font-medium">
                            Rp 650.000
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-layouts.app>