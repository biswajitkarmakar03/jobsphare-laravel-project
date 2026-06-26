<x-layout>

    <x-slot:heading>
        Edit Job : {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-8">
            <div class="border-b border-gray-200 pb-8">

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
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                                value = "{{ $job->title }}"
                                required
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
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                                value="{{ $job->salary }}"
                                required
                            >
                        </div>
                        @error('salary') 
                            <p class="text-xs text-red-600 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

          <div class="flex items-center justify-between">
                <!-- Delete Button -->
                    <button
                        type="submit"
                        form="delete-form"
                        class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500"
                        onclick="return confirm('Are you sure you want to delete this job?')"
                    >
                        Delete
                    </button>

                <!-- Cancel & Update -->
                <div class="flex items-center gap-x-4">
                    <a
                        href="/jobs/{{ $job->id }}"
                        class="text-sm font-semibold text-gray-700 hover:text-gray-900"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    >
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

    <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
                    @csrf
                    @method('DELETE')
    </form>

</x-layout>