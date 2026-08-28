<x-layouts.app>

<div>

    <div class="mb-6">

        <h1 class="text-2xl font-bold">
            Spending Report
        </h1>

        <p class="text-sm text-gray-500">
            Spending report from 2020 to 2025
        </p>

    </div>


    {{-- FILTER --}}

    <div class="bg-white border rounded-xl p-6 mb-6">

        <h2 class="font-semibold mb-5">
            Filter Report
        </h2>


        <div class="grid grid-cols-4 gap-4">

            <div>

                <label class="text-sm font-medium">
                    Year
                </label>

                <select class="w-full border rounded-lg
                               px-3 py-2.5 mt-1">

                    <option>All Years</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>

                </select>

            </div>


            <div>

                <label class="text-sm font-medium">
                    Month
                </label>

                <select class="w-full border rounded-lg
                               px-3 py-2.5 mt-1">

                    <option>All Months</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>

                </select>

            </div>


            <div>

                <label class="text-sm font-medium">
                    Minimum Value
                </label>

                <input
                    type="number"
                    placeholder="Rp 0"
                    class="w-full border rounded-lg
                           px-3 py-2.5 mt-1"
                >

            </div>


            <div>

                <label class="text-sm font-medium">
                    Maximum Value
                </label>

                <input
                    type="number"
                    placeholder="Rp 10.000.000"
                    class="w-full border rounded-lg
                           px-3 py-2.5 mt-1"
                >

            </div>

        </div>


        <div class="flex justify-between mt-5">

            <button
                class="bg-gray-100 px-4 py-2 rounded-lg">

                Reset

            </button>

            <button
                class="bg-blue-600 text-white px-5 py-2 rounded-lg">

                Apply Filter

            </button>

        </div>

    </div>


    {{-- EXPORT --}}

    <div class="flex justify-end gap-3 mb-4">

        <button
            class="border px-4 py-2 rounded-lg">

            ↓ Export Excel

        </button>

        <button
            class="border px-4 py-2 rounded-lg">

            ↓ Export PDF

        </button>

    </div>


    {{-- REPORT TABLE --}}

    <div class="bg-white border rounded-xl overflow-hidden">

        <table class="w-full text-sm">

            <thead class="bg-gray-50">

                <tr>

                    <th class="text-left px-6 py-4">
                        No
                    </th>

                    <th class="text-left px-6 py-4">
                        Spending Date
                    </th>

                    <th class="text-right px-6 py-4">
                        Spending Value
                    </th>

                </tr>

            </thead>

            <tbody>

                <tr class="border-t">

                    <td class="px-6 py-4">
                        1
                    </td>

                    <td class="px-6 py-4">
                        15 January 2025
                    </td>

                    <td class="px-6 py-4 text-right">
                        Rp 1.500.000
                    </td>

                </tr>


                <tr class="border-t">

                    <td class="px-6 py-4">
                        2
                    </td>

                    <td class="px-6 py-4">
                        20 March 2025
                    </td>

                    <td class="px-6 py-4 text-right">
                        Rp 2.300.000
                    </td>

                </tr>


                <tr class="border-t">

                    <td class="px-6 py-4">
                        3
                    </td>

                    <td class="px-6 py-4">
                        21 June 2025
                    </td>

                    <td class="px-6 py-4 text-right">
                        Rp 3.750.000
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

</x-layouts.app>