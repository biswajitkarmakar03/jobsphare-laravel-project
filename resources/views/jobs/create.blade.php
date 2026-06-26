<x-layout>

    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-8">
            <div class="border-b border-gray-200 pb-8">
                <h2 class="text-lg font-semibold text-gray-900">
                    Job Details
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    Fill in the details to create a new job listing.
                </p>

                <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium text-gray-900">
                            Job Title
                        </label>

                        <div class="mt-2">
                            <input
                                id="title"
                                name="title"
                                type="text"
                                placeholder="e.g. Senior Laravel Developer"
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required
                            >
                        </div>
                        @error('title')
                            <p class="text-xs text-red-600 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="salary" class="block text-sm font-medium text-gray-900">
                            Salary
                        </label>

                        <div class="mt-2">
                            <input
                                id="salary"
                                name="salary"
                                type="text"
                                placeholder="₹50,000/month"
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required
                            >
                        </div>
                        @error('salary') 
                            <p class="text-xs text-red-600 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                {{-- <div class="mt-10">                    
                    @if ($errors -> any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div> --}}
            </div>

            <div class="flex items-center justify-end gap-x-4">
                <button
                    type="button"
                    class="text-sm font-semibold text-gray-700 hover:text-gray-900"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >
                    Save Job
                </button>
            </div>
        </div>
    </form>

</x-layout>