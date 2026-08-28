<x-layouts.app>

<div>

    {{-- HEADER --}}
    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Departments
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Manage company departments
            </p>
        </div>

        <a href="{{ route('departments.create') }}"
           class="bg-blue-600 text-white px-4 py-2.5 rounded-lg
                  hover:bg-blue-700 font-medium">

            + Add Department

        </a>

    </div>


    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))

        <div class="mb-6 bg-green-50 border border-green-200
                    text-green-700 px-4 py-3 rounded-lg">

            {{ session('success') }}

        </div>

    @endif


    {{-- SEARCH --}}
    <div class="bg-white border rounded-xl p-5 mb-6">

        <form method="GET"
              action="{{ route('departments.index') }}"
              class="flex gap-3">

            <input
                type="text"
                name="search"
                value="{{ $search }}"
                placeholder="Search department..."
                class="flex-1 border rounded-lg px-4 py-2.5
                       focus:ring-2 focus:ring-blue-500
                       focus:outline-none"
            >

            <button
                type="submit"
                class="bg-gray-900 text-white px-5 py-2.5
                       rounded-lg hover:bg-gray-800">

                Search

            </button>

            @if($search)

                <a href="{{ route('departments.index') }}"
                   class="border px-5 py-2.5 rounded-lg
                          hover:bg-gray-50">

                    Reset

                </a>

            @endif

        </form>

    </div>


    {{-- TABLE --}}
    <div class="bg-white border rounded-xl overflow-hidden">

        <div class="px-6 py-5 border-b">

            <h2 class="font-semibold text-gray-900">
                Department List
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                List of all company departments
            </p>

        </div>


        <div class="overflow-x-auto">

            <table class="w-full text-sm">

                <thead class="bg-gray-50">

                    <tr>

                        <th class="text-left px-6 py-4 font-semibold">
                            No
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Department Name
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Created At
                        </th>

                        <th class="text-right px-6 py-4 font-semibold">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($departments as $index => $department)

                        <tr class="border-t hover:bg-gray-50">

                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>

                            <td class="px-6 py-4 font-medium">
                                {{ $department->department_name }}
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                {{ $department->created_at }}
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex justify-end gap-2">

                                    @if(auth()->user()->role === 'admin')

                                        <a
                                            href="{{ route('departments.edit', $department->department_id) }}"
                                            class="px-3 py-2 rounded-lg
                                                   bg-yellow-50 text-yellow-700
                                                   hover:bg-yellow-100">

                                            Edit

                                        </a>


                                        <form
                                            action="{{ route('departments.destroy', $department->department_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus department ini?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="px-3 py-2 rounded-lg
                                                       bg-red-50 text-red-700
                                                       hover:bg-red-100">

                                                Delete

                                            </button>

                                        </form>

                                    @else

                                        <button
                                            type="button"
                                            onclick="accessDenied()"
                                            class="px-3 py-2 rounded-lg
                                                   bg-yellow-50 text-yellow-700">

                                            Edit

                                        </button>


                                        <button
                                            type="button"
                                            onclick="accessDenied()"
                                            class="px-3 py-2 rounded-lg
                                                   bg-red-50 text-red-700">

                                            Delete

                                        </button>

                                    @endif

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="4"
                                class="px-6 py-10 text-center text-gray-500">

                                No departments found.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


{{-- ACCESS DENIED ALERT --}}
<script>

    function accessDenied() {

        alert(
            'Akses ditolak: Hanya Admin yang dapat melakukan aksi ini.'
        );

    }

</script>

</x-layouts.app>
