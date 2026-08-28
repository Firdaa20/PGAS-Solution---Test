<x-layouts.app>

<div>

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-2xl font-bold">
                Employees
            </h1>

            <p class="text-sm text-gray-500">
                Manage employee data
            </p>

        </div>

        <button
            class="bg-blue-600 text-white px-4 py-2.5 rounded-lg
                   hover:bg-blue-700">

            + Add Employee

        </button>

    </div>


    {{-- SEARCH --}}

    <div class="bg-white border rounded-xl p-5 mb-5">

        <div class="flex gap-3">

            <input
                type="text"
                placeholder="Search employee name..."
                class="flex-1 border rounded-lg px-4 py-2.5
                       focus:ring-2 focus:ring-blue-500"
            >

            <select
                class="border rounded-lg px-4 py-2.5">

                <option>All Departments</option>
                <option>Finance</option>
                <option>Human Resources</option>
                <option>Information Technology</option>
                <option>Marketing</option>
                <option>Operations</option>

            </select>

            <button
                class="bg-gray-900 text-white px-5 rounded-lg">

                Search

            </button>

        </div>

    </div>


    {{-- TABLE --}}

    <div class="bg-white border rounded-xl overflow-hidden">

        <table class="w-full text-sm">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4">
                        ID
                    </th>

                    <th class="text-left px-6 py-4">
                        Employee Name
                    </th>

                    <th class="text-left px-6 py-4">
                        Department
                    </th>

                    <th class="text-right px-6 py-4">
                        Action
                    </th>

                </tr>

            </thead>

            <tbody>

                <tr class="border-t">

                    <td class="px-6 py-4">
                        001
                    </td>

                    <td class="px-6 py-4 font-medium">
                        Andi Pratama
                    </td>

                    <td class="px-6 py-4">
                        Finance
                    </td>

                    <td class="px-6 py-4 text-right">

                        <button class="text-blue-600 mr-3">
                            Edit
                        </button>

                        <button class="text-red-600">
                            Delete
                        </button>

                    </td>

                </tr>


                <tr class="border-t">

                    <td class="px-6 py-4">
                        002
                    </td>

                    <td class="px-6 py-4 font-medium">
                        Budi Santoso
                    </td>

                    <td class="px-6 py-4">
                        Human Resources
                    </td>

                    <td class="px-6 py-4 text-right">

                        <button class="text-blue-600 mr-3">
                            Edit
                        </button>

                        <button class="text-red-600">
                            Delete
                        </button>

                    </td>

                </tr>


                <tr class="border-t">

                    <td class="px-6 py-4">
                        003
                    </td>

                    <td class="px-6 py-4 font-medium">
                        Citra Lestari
                    </td>

                    <td class="px-6 py-4">
                        Information Technology
                    </td>

                    <td class="px-6 py-4 text-right">

                        <button class="text-blue-600 mr-3">
                            Edit
                        </button>

                        <button class="text-red-600">
                            Delete
                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

</x-layouts.app>