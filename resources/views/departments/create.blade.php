<x-layouts.app>

<div>

    {{-- HEADER --}}
    <div class="flex items-center gap-4 mb-8">

        <a href="{{ route('departments.index') }}"
           class="text-gray-500 hover:text-gray-900">
            ←
        </a>

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Add Department
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Add a new department 
            </p>
        </div>

    </div>


    {{-- FORM --}}
    <div class="bg-white border rounded-xl p-6 max-w-2xl">

        <form
            action="{{ route('departments.store') }}"
            method="POST"
        >

            @csrf


            {{-- DEPARTMENT NAME --}}
            <div class="mb-6">

                <label
                    for="department_name"
                    class="block text-sm font-medium text-gray-700 mb-2"
                >
                    Department Name
                </label>

                <input
                    type="text"
                    id="department_name"
                    name="department_name"
                    value="{{ old('department_name') }}"
                    placeholder="Enter department name"
                    class="w-full border rounded-lg px-4 py-3
                           focus:outline-none focus:ring-2
                           focus:ring-blue-500"
                >

                @error('department_name')

                    <p class="text-sm text-red-600 mt-2">
                        {{ $message }}
                    </p>

                @enderror

            </div>


            {{-- BUTTON --}}
            <div class="flex items-center justify-end gap-3">

                <a
                    href="{{ route('departments.index') }}"
                    class="px-5 py-2.5 border rounded-lg
                           text-gray-700 hover:bg-gray-50"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-5 py-2.5 bg-blue-600
                           text-white rounded-lg
                           hover:bg-blue-700"
                >
                    Save Department
                </button>

            </div>

        </form>

    </div>

</div>

</x-layouts.app>